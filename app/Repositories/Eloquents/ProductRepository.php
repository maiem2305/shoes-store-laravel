<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
	public function model()
	{
		return Product::class;
	}

	public function uploadImage($request, $data)
	{
		if ($request->hasFile('image')) {
			foreach ($request->file('image') as $image) {
				$imageName = $image->getClientOriginalName();
				$image->move(public_path('images/product'), $imageName);
				$images[] = $imageName;
			}

			$data['image'] = json_encode($images);
		}

		return $data;
	}

	public function createProduct($request)
	{
		$category = Category::findOrFail($request['category']);

		if ($category) {
			$data = $request->only('name', 'description', 'gender', 'price');
			$data = $this->uploadImage($request, $data);

			$product = $category->products()->create($data);

			$product->colors()->attach($request['color']);
			$product->sizes()->attach($request['size']);

			return true;
		}

		return false;
	}

	public function updateProduct($request, $id)
	{
		$category = Category::findOrFail($request['category_id']);

		if ($category) {
			$data = $request->only('name', 'description', 'gender', 'price', 'category_id');
			$data = $this->uploadImage($request, $data);

			$product = $this->findOrFail($id);
			$product->update($data);

			$product->colors()->sync($request['color']);
			$product->sizes()->sync($request['size']);

			return true;
		}

		return false;
	}

	public function getProductsSuggestion($productSelected)
	{
		return $this->with(['colors', 'sizes'])
		->where('category_id', $productSelected->category_id)
		->where('id', '!=', $productSelected->id)
		->where('gender', $productSelected->gender)->get()->shuffle()->take(6);
	}

	public function getComments($id)
	{
		return Comment::where('product_id', $id)
		->with('user')
		->get()
		->sortByDesc('created_at');
	}

	public function getSelectedColors($product)
	{
		return $product->colors->pluck('id')->toArray();
	}

	public function getSelectedSizes($product)
	{
		return $product->sizes->pluck('id')->toArray();
	}

	public function getSearchProduct($keyword)
	{
		return $this->where('name', 'LIKE', '%' . $keyword . '%')
		->with(['colors', 'sizes'])
		->orderBy('name')
		->get()
		->take(24);
	}

	public function getProductsFollowGenderAndCategory($id, $gender)
	{
		return $this->where('category_id', $id)
		->where('gender', $gender)
		->with(['colors', 'sizes'])
		->orderBy('created_at', 'desc')
		->paginate(24);
	}

	public function deleteProduct($id)
	{
		$product = $this->find($id);

		$images = json_decode($product->image, true);
		
		foreach ($images as $image) {
			unlink('images/product/' . $image);
		}
		
		$this->delete($id);
	}
}
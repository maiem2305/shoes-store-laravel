@extends('layouts.dashboard')

@section('title', trans('product.edit_title'))

@section('content')
{{ Form::open(['route' => ['product.update', $product->id], 'files' => true, 'method' => 'PUT', 'class' => 'form-horizontal']) }}
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body col-md-8 offset-md-2">
                <h3 class="card-title">{{ trans('product.edit_title') }}</h3>
                <div class="row my-4">
                    @foreach ($product->image as $image)
                    <div class="col">
                        <img class="d-block w-100" src="{{ asset($image) }}" alt="Image">
                    </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>{{ trans('product.name') }}</label>
                    {{ Form::text('name', $product->name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.description') }}</label>
                    {{ Form::textarea('description', $product->description, ['class' => 'form-control', 'rows' => '3']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.gender') }}</label>
                    <select class="form-control" id="gender" name="gender" value="{{ $product->gender }}">
                        <option @if ($product->gender == 0) selected="selected" @endif
                            value="0">{{ trans('product.male') }}</option>
                        <option @if ($product->gender == 1) selected="selected" @endif
                            value="1">{{ trans('product.female') }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ trans('product.price') }}</label>
                    {{ Form::number('price', $product->price, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.color') }}</label>
                    <select class="form-control" id="color" name="color[]" multiple>
                        @foreach ($colors as $color)
                        <option value="{{ $color->id }}" @if(in_array($color->id, $selectedColors)) selected="selected"
                            @endif>
                            {{ $color->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ trans('product.size') }}</label>
                    <select id="size" class="form-control" name="size[]" multiple>
                        @foreach ($sizes as $size)
                        <option value="{{ $size->id }}" @if(in_array($size->id, $selectedSizes)) selected="selected"
                            @endif>
                            {{ $size->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ trans('product.category') }}</label>
                    <select id="categoryId" class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $selectedCategory))
                            selected="selected" @endif>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ trans('product.image') }}</label>
                    {{ Form::file('image[]', ['class' => 'form-control-file', 'multiple']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit(trans('product.update'), ['class' => 'btn btn-primary']) }}
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@endsection
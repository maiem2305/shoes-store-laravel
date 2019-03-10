@extends('layouts.master')

@section('title', trans('home.women_shoes', ['name' => $categorySelected->name]))

@section('content')

<div class="row">
    <div class="col-lg-3">
        <h3 class="text-uppercase mb-4">{{ trans('home.women') }}</h3>
        <div class="list-group list-group-flush">
            @foreach ($categories as $category)
            <a href="{{ route('category.women', $category->id) }}"
                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
    </div>
    <div class="col-lg-9 tab-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-uppercase float-left mb-4">
                    {{ trans('home.women_shoes', ['name' => $categorySelected->name]) }} ({{ count($products) }})</h3>
                <div class="dropdown float-right mb-4">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('home.sort') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item decreaseAscending" type="button">{{ trans('home.price') }}:
                            $$-$</button>
                        <button class="dropdown-item priceAscending" type="button">{{ trans('home.price') }}:
                            $-$$</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row results">
            @include('frontend.home.common.item')
        </div>
        <div class="d-flex justify-content-center">{{ $products->links() }}</div>
    </div>
</div>

@endsection
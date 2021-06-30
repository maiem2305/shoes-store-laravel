@extends('layouts.master')

@section('title', trans('wishlist.wishlist'))

@section('content')
<div class="new-arrivals mt-5" data-aos="fade-up">
    <h3 class="text-center title" style="color:#444;margin-bottom: 35px;">{{ trans('wishlist.wishlist') }}</h3>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row" data-aos="fade-up">
            <div class="card card-product h-100">
                <a href="#" class="swap-on-hover">
                    <img class="card-img-top img-front" src="storage/upload/product/Dep_sandal_đo.jpg">
                    <img class="card-img-top img-back" src="storage/upload/product/Dep_sandal_trang.jpg">
                </a>
                <div class="card-body px-0">
                    <div class="mb-2">
                        <span><a class="card-text text-muted" href="#">Sandal nữ</a></span>
                        <span class="stars-outer float-right">
                            <div class="stars-inner"></div>
                        </span>
                    </div>
                    <h5 class="card-text"><a href="#">Dép Sandal Hoạ Tiết Mondrian - SD05039</a></h5>
                    <h5 class="card-text text-muted price">520000đ</h5>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary btn-block text-uppercase" id="addToCart">
                            {{ trans('product.add') }}
                        </button>
                    </div>
                </div>
                <a id="remove50" style="text-align: center; margin: 10px;" href="#"><i class="fas fa-times"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
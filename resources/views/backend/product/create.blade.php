@extends('layouts.dashboard')

@section('title', trans('product.new_title'))

@section('content')
{{ Form::open(['route' => ['product.store'], 'files' => true, 'method' => 'POST', 'class' => 'form-horizontal']) }}
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body col-md-8 offset-md-2">
                <h3 class="card-title">{{ trans('product.new_title') }}</h3>
                <div class="form-group">
                    <label>{{ trans('product.name') }}</label>
                    {{ Form::text('name', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.description') }}</label>
                    {{ Form::textarea('description', '', ['class' => 'form-control', 'rows' => '1']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.gender') }}</label>
                    <select class="form-control" name="gender">
                        <option value="0">{{ trans('product.male') }}</option>
                        <option value="1">{{ trans('product.female') }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ trans('product.price') }}</label>
                    {{ Form::number('price', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.color') }}</label>
                    {{ Form::select('color[]', $colors, '', ['class' => 'form-control', 'multiple']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.size') }}</label>
                    {{ Form::select('size[]', $sizes, '', ['class' => 'form-control', 'multiple']) }}
                </div>
                <div class="form-group">
                    <label>{{ trans('product.category') }}</label>
                    <select class="form-control" id="category" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
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
                    {{ Form::submit(trans('product.create'), ['class' => 'btn btn-primary']) }}
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@endsection
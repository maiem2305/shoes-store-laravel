@extends('layouts.master')

@section('title', trans('auth.login'))

@section('modal')
@endsection

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body col-md-8 offset-md-2">
                <h3 class="card-title text-center py-2">{{ trans('auth.login') }}</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @include('frontend.common.oauth-button')
                    <div class="form-group">
                        <label for="email">{{ trans('auth.email') }}</label>
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">{{ trans('auth.password') }}</label>
                        <input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>{{ trans('auth.remember') }}
                            </label>
                            <a href="{{ route('password.request') }}" class="float-right">
                                {{ trans('auth.forgot') }}
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ trans('auth.login') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                {{ trans('auth.dont_have_account') }} <a href="{{ route('register') }}">{{ trans('auth.register') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
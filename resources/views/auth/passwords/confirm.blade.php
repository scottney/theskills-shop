@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="card" id="portal_card_container">
                <div class="card-header primaryColor">
                    <div class="card-title text-white"><b>{{ __('Confirm Password') }}</b></div>
                </div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="password"><b>{{ __('Password') }}</b></label>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <input id="input_adminPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button type="submit" class="btn btn-primary">{{ __('Confirm Password') }}</button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>

@endsection

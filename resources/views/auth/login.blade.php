@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="card" id="portal_card_container">
                <div class="card-header primaryColor">
                    <div class="card-title text-white"><b>{{ __('Login') }}</b></div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input id="input_adminEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>

                                    @error('email')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="input_adminPassword" name="password" autocomplete="current-password" required>
                                    <i class="fa-solid fa-eye-slash" id="togglePassword" title="Show Password" onclick="toggle_login()"></i>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link float-end" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif

                                    @error('password')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button type="submit" class="btn btn-primary float-end">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--<div class="card-footer primaryColor"></div>-->
            </div>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>

@endsection

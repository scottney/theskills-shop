@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col-sm-2 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="card" id="portal_card_container">
                <div class="card-header primaryColor">
                    <div class="card-title text-white"><b>{{ __('Register') }}</b></div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="name">{{ __('Name') }}</label>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="input_adminName" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required>

                                    @error('name')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="email">{{ __('E-Mail Address') }}</label>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="input_adminEmail" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="password">{{ __('Password') }}</label>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="input_adminPassword" name="password" required autocomplete="new-password">
                                    <i class="fa-solid fa-eye-slash" id="togglePassword" title="Show Password" onclick="toggle_register()"></i>

                                    @error('password')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input id="input_adminPasswordConfirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" required>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button type="submit" class="btn btn-primary float-end">{{ __('Register') }}</button>
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

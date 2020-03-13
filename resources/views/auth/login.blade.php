@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header custom-red">{{ __("Don't be shy :)") }}</div>

                <div class="card-body custom-bg-color-light">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-sm-4 col-form-label text-md-right custom-font-cursive">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right custom-font-cursive">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-custom">
                                    {{ __('Sign In') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class=" card-header text-danger">
                    Sample credentials you can use:
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>Admin</h5>
                            <p class="m-0 p-0">email:
                                <code>admin@email.com</code>
                            </p>
                            <p class="m-0 p-0">Password:
                                <code>password</code>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <h5>Librarian</h5>
                            <p class="m-0 p-0">email:
                                <code>naruto@email.net</code>
                            </p>
                            <p class="m-0 p-0">Password:
                                <code>secret</code>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <h5>Student</h5>
                            <p class="m-0 p-0">email:
                                <code>janedoe@email.com</code>
                            </p>
                            <p class="m-0 p-0">Password:
                                <code>secret</code>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

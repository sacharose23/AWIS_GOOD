@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <br>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">{{ __('Login') }}</p>                    
                </header>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label class="label">{{ __('E-Mail Address') }}</label>
                                    <div class="control {{ $errors->has('email') ? ' is-invalid' : '' }} is-expanded">
                                        <input class="input" type="text" placeholder="Text input" value="{{ old('email') }}"  name="email" required autofocus>
                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="help is-danger" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="field">
                                    <label class="label">{{ __('Password') }}</label>
                                    <div class="control {{ $errors->has('password') ? ' is-invalid' : '' }} is-expanded">
                                        <input class="input" type="password" placeholder="Text input" value="{{ old('email') }}" name="password" required autofocus>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="column">
                                <button type="submit" class="button">
                                    {{ __('Login') }}
                                </button>
                                &nbsp;
                                @if (Route::has('password.request'))
                                    <a class="button is-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            </div>
{{--  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
    
                            </div>
                        </div>  --}}

                        {{--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>  --}}



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

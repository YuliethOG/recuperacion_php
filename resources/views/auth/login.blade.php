@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container is-max-desktop column is-one-third has-background-grey-light">
    <div class="has-text-centered">
        <div class="">
            <div class="">
                <div class="is-size-3">{{ __('INICIO DE SESIÓN') }}</div>
                <br>
                <div class="">
                    <form class="has-background-light box" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <label for="email" class="label is-size-4">{{ __('Correo electronico') }}</label>
                            
                            <div class="control">
                                <input id="email" type="email" class="input is-info form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="field">
                            <label for="password" class="label is-size-4">{{ __('Contraseña') }}</label>
                            
                             <div class="control">
                                <input id="password" type="password" class="input is-info form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <div class="has-text-left">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check is-size-5" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="is-size-5 button is-link">
                                    {{ __('Ingresar') }}
                                </button>

                              
                            </div>
                            <br>
                            @if (Route::has('password.request'))
                                    <a class="is-size-5" href="{{ route('password.request') }}">
                                        {{ __('Recuperar contraseña?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

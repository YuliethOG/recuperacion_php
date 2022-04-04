@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container is-max-desktop column is-one-third has-background-grey-light">
    <div class="has-text-centered ">
        <div class="">
            <div class="">
                <div class="is-size-3">{{ __('REGISTRO') }}</div>
                <br>
                <div class="">
                    <form class="has-background-light box " method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field">
                            <label for="name" class="label is-size-4">{{ __('Nombre') }}</label>

                            <div class="control">
                                <input id="name" type="text" class=" input is-info form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="label is-size-4">{{ __('Correo electronico') }}</label>

                            <div class="control">
                                <input id="email" type="email" class="input  is-info form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="input  is-info form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password-confirm" class="label is-size-4">{{ __('Confirmar contraseña') }}</label>

                            <div class="control">
                                <input id="password-confirm" type="password" class="input  is-info form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <div class="">
                                <button type="submit" class=" is-size-5 button is-link">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

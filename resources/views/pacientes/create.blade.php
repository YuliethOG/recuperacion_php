@extends('adminlte::page')

@section('content')
<br>
<br>
<br>
<br>
<div class="container is-max-desktop column is-one-third has-background-grey-light">
    <div class="has-text-centered">
        <div class="">
            <div class="">
                <form action="{{ route('pacientes.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="">
                        <div class="">
                            <h4 class=" has-text-left"><strong>Paciente</strong></h4>
                           

                        </div>
                            <div class="">
                                {{-- @if ($errors->any())
                                <div class="">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif --}}
                                <div class="field">
                                    <label for="documento" class="label is-size-4">Documento</label>
                                    <div class="">
                                    <input type="number" class="input is-info form-control" name="documento" placeholder="Ingrese su documento" value="{{old('documento')}}" autofocus>
                                    @if ($errors->has('documento'))
                                    <span class="has-text-danger" for="input-documento">{{ $errors->first('documento') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="nombre" class="label is-size-4">Nombre</label>
                                <div class="">
                                <input type="text" class="input is-info form-control" name="nombre" placeholder="Ingrese su nombre" value="{{old('nombre')}}">
                                @if ($errors->has('nombre'))
                                <span class="has-text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <label for="apellido" class="label is-size-4">Apellido</label>
                            <div class="">
                            <input type="text" class="input is-info form-control" name="apellido" placeholder="Ingrese su apellido" value="{{old('apellido')}}">
                            @if ($errors->has('apellido'))
                            <span class="has-text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label for="direccion" class="label is-size-4">Dirección</label>
                        <div class="">
                        <input type="text" class="input is-info form-control" name="direccion" placeholder="Ingrese su direccion" value="{{old('direccion')}}">
                        @if ($errors->has('direccion'))
                        <span class="ehas-text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label for="telefono" class="label is-size-4">Celular</label>
                    <div class="">
                    <input type="number" class="input is-info form-control" name="telefono" placeholder="Numero celular" value="{{old('telefono')}}">
                    @if ($errors->has('telefono'))
                    <span class="has-text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                    @endif
                </div>
            </div>
            <div class="field">
                <label for="email" class="label is-size-4">Email</label>
                <div class="">
                <input type="email" class="input is-info form-control" name="email" placeholder="Ingrese su email" value="{{old('email')}}">
                @if ($errors->has('email'))
                <span class="has-text-danger" for="input-email">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="">
        <button type="submit" class="button is-link">Enviar</button>
            <a href="{{route('pacientes.index')}}" class="button is-danger">Cancelar</a>
        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

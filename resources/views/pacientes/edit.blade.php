@extends('adminlte::page')

@section('content')
<br>
<br>
<br>
<br>
<div class="content">
    <div class="container is-max-desktop column is-one-third has-background-grey-light">
        <div class="has-text-centered">
            <div class="">
                <form action="{{route('pacientes.update', $paciente->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <div class="card-header card-header-info">
                            <h4 class="card-title text-dark"><strong>Pacientes</strong></h4>
                        </div>
                            <div class="">
                                <div class="field">
                                    <label for="documento" class="label is-size-4">Documento</label>
                                    <div class="">
                                    <input type="number" class="input is-info form-control" name="documento" readonly value="{{ old('documento', $paciente->documento)}}">
                                    @if ($errors->has('documento'))
                                    <span class="has-text-danger" for="input-documento">{{ $errors->first('documento') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="nombre" class="label is-size-4">Nombre</label>
                                <div class="">
                                <input type="text" class="input is-info form-control" name="nombre" value="{{ old('nombre', $paciente->nombre)}}" autofocus>
                                @if ($errors->has('nombre'))
                                <span class="has-text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <label for="apellido" class="label is-size-4">Apellido</label>
                            <div class="">
                            <input type="text" class="input is-info form-control" name="apellido" value="{{ old('apellido', $paciente->apellido)}}">
                            @if ($errors->has('apellido'))
                            <span class="has-text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label for="direccion" class="label is-size-4">Dirección</label>
                        <div class="">
                        <input type="text" class="input is-info form-control" name="direccion" value="{{ old('direccion', $paciente->direccion)}}">
                        @if ($errors->has('direccion'))
                        <span class="has-text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label for="telefono" class="label is-size-4">Celular</label>
                    <div class="">
                    <input type="number" class="input is-info form-control" name="telefono" value="{{ old('telefono', $paciente->telefono)}}">
                    @if ($errors->has('telefono'))
                    <span class="has-text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                    @endif
                </div>
            </div>
            <div class="field">
                <label for="email" class="label is-size-4">Email</label>
                <div class="">
                <input type="email" class="input is-info form-control" name="email" value="{{ old('email', $paciente->email)}}">
                @if ($errors->has('email'))
                <span class="has-text-danger" for="input-email">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="field">
            <label for="email" class="label is-size-4">Estado</label>
            <div class="">
                <select class="input is-info form-control" name="estado" id="estado">

                        @if($paciente->estado==1)


                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>

                        @else

                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>

                    @endif
                {{-- </option>
                    <option value="0">Inactivo</<option>
                    <option value="1">Activo</option>
                 --}}
                </select>
          </div>
        </div>
    <div class="">
        <button type="submit" class="button is-link">Actualizar</button>
        <a href="{{route('pacientes.index')}}" class="button is-danger">Cancelar</a>
    </div>
    </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


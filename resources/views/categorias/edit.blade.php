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
                <form action="{{ route('categorias.update', $categoria->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <div class="card-header card-header-info">
                            <h4 class="card-title text-dark"><strong>CATEGORÍAS</strong></h4>
                            
                        </div>
                        <div class="">
                            <div class="field">
                                <label for="documento" class="label is-size-5">Nombre</label>
                                <div class="">
                                    <input type="text" class=" input is-info form-control" name="nombre" value="{{ old('nombre',$categoria->nombre) }}"  autofocus>
                                    @if ($errors->has('nombre'))
                                    <span class="has-text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="estado" class="label is-size-5">Estado</label>
                                <div class="">
                                    <select class="input is-inf form-control" name="estado" id="estado">

                                            @if($categoria->estado==1)


                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</<option>

                                            @else

                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</<option>

                                        @endif

                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <button type="submit" class="button is-link">Actualizar</button>
                            <a href="{{route('categorias.index')}}" class="button is-danger ">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<div class="container is-max-desktop column is-one-third has-background-grey-light">
    <div class="has-text-centered">
        <div class="">
            <div class="">
                <form action="{{ route('categorias.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="">
                        <div class="card-header card-header-info">
                            <h4 class="card-title text-dark"><strong>CATEGORIA</strong></h4>
                        
                           
                        </div>
                        <br>
                        <div class="">
                            <div class="field">
                                <label for="documento" class="label is-size-5">Nombre</label>
                                <div class="">
                                    <input type="text" class="input is-info form-control" name="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre')}}"  autofocus >
                                    @if ($errors->has('nombre'))
                                    <span class="has-text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <button type="submit" class="button is-link">Enviar</button>
                            <a href="{{route('categorias.index')}}" class="button is-danger ">Cancelar</a>
                        </div>
    

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
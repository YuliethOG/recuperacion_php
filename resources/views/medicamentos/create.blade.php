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
                <form action= "{{route('medicamentos.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="">
                        <div class="card-header card-header-info">
                            <h4 class="is-size-3"><strong>Medicamentos</strong></h4>

                        </div>
                            
                            <div class="field">
                                    <label for="Código" class="label is-size-4">Código</label>
                                    <div class="">
                                    <input type="number" class="input is-inf form-control" name="Código" placeholder="Ingrese su Código" value="{{old('Código')}}" autofocus>
                                    @if ($errors->has('Código'))
                                    <span class="has-text-danger" for="input-Código">{{ $errors->first('Código') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="Nombre" class="label is-size-4">Nombre</label>
                                <div class="">
                                <input type="text" class="input is-inf form-control" name="Nombre" placeholder="Ingrese su Nombre" value="{{old('Nombre')}}">
                                @if ($errors->has('Nombre'))
                                <span class="has-text-danger" for="input-Nombre">{{ $errors->first('Nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <label for="Categorías" class="label is-size-4">Categorías</label>
                            <div class="">
                                <select class="input is-infform-control" name="Categorías" id="Categorías">
                                    <option value="">Seleccione la categoría</option>
                                    @foreach ( $categorias as $row )
                                    @if ($row->estado==0)
                                    @continue
                                    @endif
                                    <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Categorías'))
                                <span class="has-text-danger" for="input-Categorías">{{ $errors->first('Categorías') }}</span>
                                @endif
                        </div>
                    </div>
    <div class="">
        <button type="submit" class="button is-link">Enviar</button>
            <a href="{{route('medicamentos.index')}}" class="button is-danger">Cancelar</a>
        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

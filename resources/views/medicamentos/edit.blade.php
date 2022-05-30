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
                <form action="{{route('medicamentos.update', $medicamento->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <div class="">
                            <h4 class="card-title text-dark"><strong>Medicamentos</strong></h4>
                            
                        </div>
                            <div class="">
                                <div class="field">
                                <label for="Código" class="label is-size-5">Código</label>
                                    <div class="">
                                    <input type="number" class="input is-info form-control" name="Código" placeholder="Ingrese su Código" value="{{old('Código',$medicamento-> Código)}}" autofocus>
                                    @if ($errors->has('Código'))
                                    <span class="has-text-danger" for="input-Código">{{ $errors->first('Código') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="Nombre" class="label is-size-5">Nombre</label>
                                <div class="">
                                <input type="text" class="input is-info form-control" name="Nombre" placeholder="Ingrese su Nombre" value="{{old('Nombre',$medicamento-> Nombre)}}">
                                @if ($errors->has('Nombre'))
                                <span class="has-text-danger" for="input-Nombre">{{ $errors->first('Nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <label for="Categorías" class="label is-size-5">Categorías</label>
                            <div class="">
                                <select class="input is-info form-control" name="Categorías" id="Categorías">
                                   <option  value="{{old('Categorías',$medicamento->Categorías)}}">Seleccione solo para modificar</option>
                                    @foreach ( $categorias as $row )
                                        @if ($row->estado==0)
                                            @continue
                                        @endif

                                        <option @if ($row->id==$medicamento->Categorías)
                                            selected="true"
                                        @endif

                                         value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Categorías'))
                                <span class="has-text-danger" for="input-Categorías">{{ $errors->first('Categorías') }}</span>
                                @endif
                           

                        </div>
                    </div>
                   
        <div class="field">
            <label for="email" class="label is-size-5">Estado</label>
            <div class="">
                <select class="input is-info form-control" name="estado" id="estado">

                        @if($medicamento->estado==1)


                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>

                        @else

                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>

                    @endif
               
                </select>
          </div>
        </div>
    <div class="">
        <button type="submit" class="button is-link">Actualizar</button>
        <a href="{{route('medicamentos.index')}}" class="button is-danger">Cancelar</a>
    </div>
    </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
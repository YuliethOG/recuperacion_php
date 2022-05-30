@extends('adminlte::page')

@section('content')
<br>
<div class="content">
        <div class=" container is-fluid column is-three-quarters">
            <div  class="has-background-success-light">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="">
                                    <h4 class="is-size-3"><strong>CATEGORÍAS</strong></h4>
                                </div>
                                <div class="">
                                    @if (session('success'))
                                    <div class="notification is-success" role="success">
                                        {{ session('success')}}
                                    </div>
                                    @endif
                                    <div class="has-text-right">
                                        <div class="">
                                            <a href="{{  route('categorias.create') }}" class="button is-link ">Agregar Categoría</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=" ">
                                        <table  class=" table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:90%">
                                            <thead >
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Estado</th>
                                                <th >Funciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($categorias as $categoria)
                                                    <tr>
                                                        <td>{{ $categoria->id }}</td>
                                                        <td>{{ $categoria->nombre }}</td>
                                                        <td class="has-text-centered">
                                                        @if ($categoria->estado==1)
                                                        <button type="button" class="button is-success is-rounded">
                                                            Activo
                                                        </button>

                                                        @else
                                                        <button type="button" class="button is-danger is-rounded">
                                                            Inactivo
                                                        </button>

                                                        @endif
                                                    </td>
                                                        <td class="">
                                                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="button is-info is-outlined" type="button">
                                                            Editar</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

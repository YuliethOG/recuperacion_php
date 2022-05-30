@extends('adminlte::page')

@section('content')
<br>
<div class="is-size-4 content">
        <div class=" container is-fluid column is-three-quarters">
            <div class="">
            <div  class="has-background-success-light">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                <h4 class="is-size-3"><strong>Medicamentos</strong></h4>
                            </div>
                            <div class="">
                                @if (session('success'))
                               <div class="notification is-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="has-text-right">
                                    <div class="">
                                        <a href="{{route('medicamentos.create')}}" class="button is-link is-rounded">Agregar Medicamentos</a>
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <table  id="medicamentos" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%">
                                        <thead class="text-white" id="fondo">

                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Categorías</th>
                                            <th>Estado</th>
                                            <th class="text-right">Funciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($medicamentos as $Medicamento)


                                            <tr>

                                                <td>{{ $Medicamento->Código}}</td>
                                                <td>{{ $Medicamento->Nombre }}</td>
                                                @foreach ($categorias as $categoria)
                                                @if ($Medicamento->Categorías==$categoria->id)
                                                <td>{{ $categoria->nombre}}</td>
                                                @endif
                                                @endforeach

                                                <td class="has-text-centered">
                                                @if ($Medicamento->estado==1)
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
                                                 <a href="{{ route('medicamentos.edit', $Medicamento->id) }}"
                                                    class="button is-info is-outlined" type="button">Editar</a>

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

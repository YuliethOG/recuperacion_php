@extends('layouts.app')

@section('content')
<br>
<div class=" content">
        <div class="container is-fluid column is-three-quarters">
            <div  class="has-background-success-light">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                <h4 class="is-size-3"><strong>Pacientes</strong></h4>
                            </div>
                            <div class="">
                                @if (session('success'))
                               <div class="notification is-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="has-text-right">
                                    <div class="">
                                        <a href="{{route('pacientes.create')}}" class="button is-link is-rounded">Agregar Pacientes</a>
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <table  id="pacientes" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%">
                                        <thead class="text-white" id="fondo">

                                            <th>No.</th>
                                            <th>Documento</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dirección</th>
                                            <th>Celular</th>
                                            <th>Email</th>
                                            <th>Estado</th>
                                            <th class="text-right">Función</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($pacientes as $paciente)


                                            <tr>

                                                <td>{{ $paciente->id}}</td>
                                                <td>{{ $paciente->documento }}</td>
                                                <td>{{ $paciente->nombre }}</td>
                                                <td>{{ $paciente->apellido }}</td>
                                                <td>{{ $paciente->direccion }}</td>
                                                <td>{{ $paciente->telefono }}</td>
                                                <td>{{ $paciente->email }}</td>
                                                <td class="has-text-centered">
                                                @if ($paciente->estado==1)
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
                                                 <a href="{{ route('pacientes.edit', $paciente->id) }}"
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

@extends('adminlte::page')

@section('content')
<br>
<div class="is-size-4 content">
        <div class="container is-fluid column is-three-quarters">
            <div >
            <div class="has-background-success-light">
                <div >
                    <div >
                        <div >
                            <div >
                                <h4 class="is-size-3"><strong>formula</strong></h4>

                            </div>
                            <div >
                                @if (session('success'))
                               <div id="mensaj" class="notification is-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="has-text-right">
                                    <div >
                                        <a href="{{route('formula_detalle.create')}}" class="button is-link is-rounded">Agregar Formula</a>
                                    </div>
                                </div>
                                <br>
                                <div >
                                    <table  id="compras" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%">
                                        <thead>
                                            <th>No.</th>
                                            <th>Documento</th>
                                            <th>Pacientes</th>
                                            <th>fecha_formula</th>
                                            <th >Función</th>
                                        </thead>
                                        <tbody>

                                            <tr>
                                            @foreach ($formula as $formula)
                                                <td>{{ $formula->id}}</td>
                                                @foreach ($paciente as $row)
                                                @if ($formula->paciente==$row->id)
                                                <td>{{ $row->documento}}</td>
                                                <td>{{ $row->nombre}} {{$row->apellido}}</td>
                                                @endif
                                                @endforeach
                                                <td>{{ $formula->created_at}}</td>



                                               <td>
                                                 <a  href="{{route('formula.show', $formula->id)}}" type="button" class="button is-info is-outlined"><strong>Ver</strong></a>

                                                    <form action="{{route('formula.destroy', $formula->id)}}" method="post" style="display: inline-block;" onsubmit="return confirm('¿Está seguro de eliminar la formula?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button is-danger is-outlined" type="submit" rel="tooltip">
                                                            <i>Eliminar</i>
                                                        </button>
                                                    </form>
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

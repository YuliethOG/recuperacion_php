@extends('adminlte::page')

@section('content')
<br>
<div class="is-size-4 content">
    <div class="container is-fluid column is-three-quarters">
        <div class="">
        <div class="has-background-success-light">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            <h4 class="is-size-2 "><strong>Formula Detalle</strong></h4>

                        </div>
                        <div class="">

                            @foreach ( $formulas as $formula )
                            <div class="field is-horizontal">

                                    <label for="paciente"  class="is-size-3">Pacientes:</label>
                                    <div class="form-control field-body">
                                        <input type="text" class="column is-one-quarter input is-info mx-4 mt-2" value="{{$formula->nombre}} {{$formula->apellido}}" disabled>
                                        @if ($errors->has('paciente'))
                                        <span class="error text-danger" for=" input-paciente">{{ $errors->first('paciente') }}</span>
                                        @endif
                                </div>
                                @endforeach
                            </div>
                            <br>
                            <div class="">
                                <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%">
                                    <thead >
                                        <th>Medicamento</th>
                                        <th>Cantidad</th>
                                        <th>Cada/Hora</th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($medicamentos as $row)
                                            <td>{{ $row->Nombre}}</td>
                                            <td>{{ $row->cantidad_c}}</td>
                                            <td>{{ $row->horas}}</td>

                                        </tr>
                                     @endforeach

                                    </tbody>
                                </table>
                                <div class="">
                                    <div class="has-text-centered">
                                        <a href="{{route('formula.index')}}" class="button is-link button is-medium">Regresar</a>
                                    </div>
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

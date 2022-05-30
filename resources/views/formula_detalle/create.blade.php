@extends('adminlte::page')

@section('content')
<br>
<br>
<br>
<br>
<div class="is-size-4 content">
    <div class=" container is-fluid column is-three-quarters">
        <div >
            <div class="has-background-success-light">
                <form action="{{route('formula.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div >
                        <div >
                            <h4 class="is-size-2 "><strong>Formula</strong></h4>
                        </div>
                            <div class="field">
                                <div class="has-text-right">
                                 <label for="paciente"  class="is-size-3">Pacientes: </label>
                                     <div class="form-control field select is-rounded">
                                        <select  name="paciente" id="paciente"  >
                                            <option value="">Seleccione el paciente</option>
                                            @foreach ( $paciente as $row )
                                            @if ($row->estado==0)
                                            @continue
                                            @endif
                                            <option value="{{$row->id}}">{{$row->nombre}} {{$row->apellido}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('paciente'))
                                        <span class="has-text-danger" for=" input-paciente">{{ $errors->first('paciente') }}</span>
                                        @endif
                                     </div>
                                </div>
                            </div>
                                <div class="field is-horizontal">
                                        <label for="cantidad" class=" is-size-3">Cantidad:</label>
                                        <div class=" field-body">

                                        <input type="number" class="column is-one-quarter input is-info mx-4 mt-2" id="cantidad" name="cantidad" placeholder="Ingrese su cantidad" >
                                        

                                    </div>
                                </div>
                                <div class="field">
                                    <label for="medicamento" class="is-size-3">Medicamentos:</label>
                                    <div class="select is-rounded">
                                        <select   name="medicamento" id="medicamento">
                                            <option value="">Seleccione el medicamento</option>
                                            @foreach ( $medicamentos as $row )
                                            @if ($row->estado==0)
                                            @continue
                                            @endif
                                            <option value="{{$row->id}}">{{$row->Nombre}}</option>
                                            @endforeach
                                        </select>
                                       
                                </div>
                                </div>
                                <div class="field is-horizontal">
                                        <label for="hora" class="is-size-3">Hora:</label>
                                        <div class="field-body mx-4 mt-2">
                                        <input type="text" class="column is-one-quarter input is-info" id="hora" name="hora" placeholder="Ingrese su precio" >
                                       
                                    </div>
                                 </div>
                                    <div>
                                        <button onclick="agregar()" class="button is-success"  type="button" >Agregar Producto</button>
                                    </div>
                            </div>
                          <br>


    <div >
        <table   class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%">
            <thead >
            <tr>
                <th>medicamento</th>
                <th>Cantidad</th>
                <th>hora</th>
                <th>Funciones</th>

            </tr>
                </thead>
                <tbody id="tblmedicamentos">

                </tbody>
            </table>
        </div>
        <br>
        <div class="">
            <button type="submit" class="button is-link">Enviar</button>

                <a href="{{route('formula.index')}}" class="button is-danger">Cancelar</a>
            </div>
        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>


    function agregar(){
        let medicamento_id = $("#medicamento option:selected").val();
        let medicamento_text = $("#medicamento option:selected").text();
        let cantidad = $("#cantidad").val();
        let hora = $("#hora").val();
        if( cantidad > 0 && hora > 0 ){
            $("#tblmedicamentos").append(`
                <tr id="tr-${medicamento_id}">
                    <td>
                        <input type="hidden" name="medicamento_id[]" value="${medicamento_id}" />
                                <input type="hidden" name="cantidades[]" value="${cantidad}" />
                        ${medicamento_text}

                    </td>
                    <td >${cantidad}</td>
                    <td>${hora}</td>
                    <td>
                        <a href="{{route('formula_detalle.create')}}" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"></a>

                        <button type="button" class="button is-danger is-hovered" onclick="eliminar_medicamento(${medicamento_id})" >X</button>
                    </td>

                </tr>
            `);
            }
        else {
            alert("Se debe ingresar una cantidad/hora valida");
        }
        $("#medicamento").val('');
        $("#cantidad").val('');
        $("#hora").val('');

    }

    function eliminar_medicamento(id){
        $("#tr-"+id).remove("");

       
    }
</script>
@endsection



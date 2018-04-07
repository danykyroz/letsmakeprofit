@extends('layouts.admin')
@section('body')

<div class="row">
  <!--     Mis Referidos    -->
  <div class="card">
    <div class="col-md-12">

      <div class="card-header" data-background-color="red">
        <h4 class="title">Referidos {{$cliente->names}} {{$cliente->last_names}}</h4>
        <p class="category">Referidos de la cuenta {{$cliente->refid}}  </p>
      </div>
      <!--     lista de referidos   -->
      <div class="card-content table-responsive">
        <table class="table">
          <thead class="text-primary">
            <tr>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Numero</th>
              <th>Correo</th>
              <th>Nivel</th>
              <th>Ver </th>
            </tr></thead>
            <tbody>

              @foreach ($listreferidos as $key=>$data)
              <?php $id=$data["perfil"]->cliente_id; ?>

              <tr>
                <td>{{ $data["referido"]["names"] }} {{ $data["referido"]["last_names"] }}</td>
                <td><a href="mis-referidos/detalle/{{$data['referido']['refid']}}">{{ $data["referido"]["refid"] }}</a> </td>
                <td>{{ $data["perfil"]->telefono }} </td>
                <td>{{ $data["perfil"]->email }} </td>
                <td>Nivel {{ $data["referido"]->nivel }} </td>
                <td>
                  <button class="btn btn-primary modal-perfil" data-toggle="modal" data-target="#modalPerfil"  data-href="{{ @route ("perfil_showajax",[$id]) }}" ><i class="material-icons">unarchive</i>Ver<div class="ripple-container"></div></button>
                </td>

              </tr>

              @endforeach


            </tbody>
          </table>
          <a href="{{@route("referidos")}}" class="btn btn-default">Volver</a>
          {{ $referidos->links() }}

        </div>

      </div>
    </div>
  </div>
<!--     modal    -->


@stop


@section("add-scripts")
<script>
  $(document).ready(function(){
    $(".modal-perfil").click(function(e){
      e.preventDefault();
      var url=$(this).data("href");
      $.get(url,{},function(htmlresponse){
        
        $("#modal-perfil").html(htmlresponse);

      })

    })
  });
</script>

@stop

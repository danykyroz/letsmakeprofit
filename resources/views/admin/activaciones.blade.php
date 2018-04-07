<?php
if(count($activaciones)>0){
    $activacion=$activaciones[0];
}else{
  $activacion=false;
}
 ?>
@extends('layouts.admin')
@section('body')

<div class="container-fluid">
  <div class="row">
    <!--     Mensaje    -->
    <div class="card" id="mensagge">
      @if($mensaje_success!="")

      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
          </button>
          <span>
            {{ $mensaje_success }}
        </span>
        </div>
        <br/><br/>
      </div>

      @endif

      @if ($activacion)
      <div class="col-md-9">

        <div class="card-header" data-background-color="red">
          <h4 class="title">Activación</h4>
          <p class="category">Aqui puedes ver los mensajes y archivos adjuntos que te envia el usuario, al verificar el pago puedes Procedes a activar este usuario </p>
        </div>
        <!--     Tarjeta de Contacto   -->
        <div class="col-sm-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#p">
                <img class="img" src="{{asset("theme/admin/img/faces/marc.jpg")}}">
              </a>
            </div>
            <div class="content">
              <h6 class="category text-gray">CEO / Co-Founder</h6>
              <h4 class="card-title">{{$activacion["cliente"]->names}} {{$activacion["cliente"]->last_names}}</h4>
              <p class="card-content">
                Link De Asociado: <br>
                <span>letsmakeprofit.co/m/{{$activacion["cliente"]->refid}}</span>
              </p>
            </div>
          </div>
          <div class="card-footer">
            <h4 class="title">Informacion Personal</h4>
            <p>Tarjeta de contacto</p>
            <div class=" stats-info">Teléfono:<span>{{$activacion["perfil"]->telefono}}</span></div>
            <div class=" stats-info">Email: <span>{{$activacion["perfil"]->email}}</span></div>
            <div class=" stats-info">Facebook:<span>{{$activacion["perfil"]->facebook}}</span></div>
            <div class=" stats-info">Google+:  <span>{{$activacion["perfil"]->google}}</span></div>
            <div class=" stats-info">Whatsapp:  <span>{{$activacion["perfil"]->whatsapp}}</span></div>
            <div class=" stats-info">Dirección: <span>{{$activacion["perfil"]->direccion}}</span></div>
            <div class=" stats-info">Ciudad:  <span>{{$activacion["perfil"]->ciudad}}</span></div>
            <div class=" stats-info">Pais: <span>{{$activacion["perfil"]->pais}}</span></div>
            <div class=" stats-info">Zip/Postal code: <span>{{$activacion["perfil"]->codigo_postal}}</span></div>
            <div class="novisible-info stats-info">Genero: <span>@if ($activacion["perfil"]->genero=="M") Mujer @else Hombre @endif</span></div>
          </div>
        </div>
        <div class="col-md-8">
          <h4 class="title" style="padding:70px 0 0 0;">Solicitud Activacion </h4>
          <p>El usuario {{$activacion["cliente"]->names}} {{$activacion["cliente"]->last_names}} Ah enviado una solicitud de activacion y te a enviado un mensaje</p>
          <h4>Mensaje</h4>
          <p>{{$activacion["activacion"]->comentarios}}</p>
          <span><i class="material-icons">dashboard</i> Archivo Adjunto: <a href="{{asset('storage')}}/{{$activacion['activacion']->archivo}}">Ver Archivo</a></span>
          <h4 class="title">Activacion de Usuario</h4>
          <p>Si la informacion proporcionada es verificada y real en su totalidad, Si usted esta de acuerdo en activar al usuario {{$activacion["cliente"]->names}} {{$activacion["cliente"]->last_names}} al nivel {{$activacion['activacion']->nivel}} pulse el siguiente boton de ACTIVAR</p>
          <button class="btn btn-success" id="activar" data-href="{{@route('activaciones_aprobarusuario')}}"  data-id="{{$activacion['activacion']->id}}"> ACTIVAR USUARIO {{$activacion["cliente"]->names}} {{$activacion["cliente"]->last_names}}</button>
        </div>
      </div>
      @else
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
          </button>
          <span>
          No hay activaciones pendientes
        </span>
        </div>
        <br/><br/>
      </div>
      @endif
    </div>
  </div>
  <div class="col-md-3">
  </div>
</div>
@stop


@section('add-scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $("#activar").click(function(e){
      var url=$(this).data("href");
      var id=$(this).data("id");
      var url=url+"?id="+id;
      location.href=url;
    })
  });
</script>
@stop

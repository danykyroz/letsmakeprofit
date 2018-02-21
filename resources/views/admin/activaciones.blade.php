@extends('layouts.admin')
@section('body')

<div class="container-fluid">
  <div class="row">
    <!--     Mensaje    -->
    <div class="card" id="mensagge">
      <div class="col-md-9">

        <div class="card-header" data-background-color="red">
          <h4 class="title">Activacion</h4>
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
              <h4 class="card-title">Alec Thompson</h4>
              <p class="card-content">
                Link De Asociado: <br>
                <span>www.letsmakeprofit.com/sdfdfsdfd</span>
              </p>
            </div>
          </div>
          <div class="card-footer">
            <h4 class="title">Informacion Personal</h4>
            <p>Tarjeta de contacto</p>
            <div class=" stats-info">Telefono:    <span>4:31</span></div>
            <div class=" stats-info">Email: <span>6:01</span></div>
            <div class=" stats-info">Facebook:<span>4:09</span></div>
            <div class=" stats-info">Google+:  <span>3:51</span></div>
            <div class=" stats-info">Whatsapp:  <span>4:15</span></div>
            <div class=" stats-info">Address: <span>4:17</span></div>
            <div class=" stats-info">City:  <span>4:52</span></div>
            <div class=" stats-info">State/Province:   <span>4:18</span></div>
            <div class=" stats-info">Country: <span>4:16</span></div>
            <div class=" stats-info">Zip/Postal code: <span>6:04</span></div>
            <div class="novisible-info stats-info">Gender: <span>6:04</span></div>
          </div>
        </div>
        <div class="col-md-8">
          <h4 class="title" style="padding:70px 0 0 0;">Solicitud Activacion </h4>
          <p>El usuario PRESTIGE1 Ah enviado una solicitud de activacion y te a enviado un mensaje</p>
          <h4>Mensaje</h4>
          <p>Mensaje Mensaje MensajeMensajeMensaje Mensaje MensajeMensajeMensaje MensajeMensajeMensaje Mensaje Mensaje Mensaje MensajeMensajeMensaje Mensaje MensajeMensajeMensaje Mensaje</p>
          <span><i class="material-icons">dashboard</i> Archivo Adjunto: <a href="#">archivo-adjunto.pdf</a></span>
          <h4 class="title">Activacion de Usuario</h4>
          <p>Si la informacion proporcionada es verificada y real en su totalidad, Si usted esta de acuerdo en activar al usuario PRESTIGE1 al nivel 1 pulse el siguiente boton de ACTIVAR</p>
          <button class="btn btn-success"> ACTIVAR USUARIO PRESTIGE1</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
  </div>
</div>
@stop

@extends('layouts.admin')
@section('body')

<div class="row">
<div class="col-md-9">
<div class="card">
<div class="card-header" data-background-color="red">
<h4 class="title">Perfil</h4>
<p class="category">Completa el perfil para mayor covertura de tus referidos</p>
</div>
<div class="card-content">


@if(empty($mensaje_success))

@else
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
  </button>
  <span>
  {{$mensaje_success}}
</span>
</div>
@endif

@if(empty($mensaje_bad))

@else
<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
  </button>
  <span>
  {{$mensaje_bad}}
</span>
</div>
@endif

<form action="{{ route('perfil_update') }}" method="post" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<h4 class="col-sm-12">Informacion Personal</h4>
<p class="col-sm-12">Cambiar foto de perfil</p>
<div class="col-sm-4">
<div class="form-group is-empty is-fileinput">
<input type="file" id="inputFile4" multiple="">
<div class="input-group">
  <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
  <span class="input-group-btn input-group-sm">
    <button type="button" class="btn btn-fab btn-fab-mini">
      <i class="material-icons">attach_file</i>
    </button>
  </span>
</div>
<span class="material-input"></span></div>
</div>
</div>
<div class="row">
    <p class="col-sm-12">Cambiar Contraseña</p>
    <div class="col-sm-4">
    <div class="form-group label-floating is-empty">
      <label class="control-label">Nueva contraseña</label>
      <input type="password" class="form-control" name="nuevo_password" id="nuevo_password" >
      <span class="material-input"></span></div>
    </div>
    <div class="col-sm-4">
      <div class="form-group label-floating is-empty">
        <label class="control-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" name="confirmar_password" name="confirmar_password" id="confirmar_password">
        <span class="material-input"></span></div>
      </div>
      <div class="col-sm-4">
          <button type="submit" class="btn btn-primary pull-left" style="margin-top:20px" name="btn_actualizar_password" value="true">Actualizar Contraseña</button>
      </div>
</div>

<div class="row">
  <p class="col-sm-12">Datos de usuario</p>
  <div class="col-md-4">
    <div class="form-group label-floating is-empty is-focused">
      <label class="control-label">Nombres</label>
      <input type="text" class="form-control" value="{{$cliente->names}}" name="names" >
      <span class="material-input"></span></div>
    </div>
    <div class="col-md-4">
      <div class="form-group label-floating is-empty is-focused">
        <label class="control-label">Apellidos</label>
        <input type="text" class="form-control" value="{{$cliente->last_names}}" name="last_names"  >
        <span class="material-input"></span></div>
      </div>
      <div class="col-md-4">
        <div class="form-group label-floating is-empty is-focused">
          <label class="control-label">Número de Teléfono</label>
          <input type="tel" class="form-control" name="telefono" value="{{$perfil->telefono}}" >
          <span class="material-input"></span></div>
        </div>
        <div class="col-md-4">
          <div class="form-group label-floating is-empty is-focused">
            <label class="control-label">Número de Teléfono 2</label>
            <input type="tel" class="form-control" name="telefonodos" value="{{$perfil->telefonodos}}">
            <span class="material-input"></span></div>
          </div>
          <div class="col-md-4">
            <div class="form-group label-floating is-empty is-focused">
              <label class="control-label">Correo Electronico</label>
              <input type="email" class="form-control" name="email" value="{{$perfil->email}}">
              <span class="material-input"></span></div>
            </div>
            <div class="col-md-2">
              <div class="form-group label-floating is-empty is-focused">
                <label class="control-label">Edad</label>
                <input type="number" class="form-control" name="edad" value="{{$perfil->edad}}">
                <span class="material-input"></span></div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <select class="form-control" id="genero" name="genero">
                    <option value="" >Genero </option>
                    <option value="M" @if ($perfil->genero=="M" ) selected="true" @endif >Mujer </option>
                    <option value="H" @if ($perfil->genero=="H" ) selected="true" @endif >Hombre</option>
                  </select>
                  <span class="material-input"></span></div>
                </div>
              </div>
              <div class="row">
                <p class="col-sm-12">Redes Sociales</p>
                <div class="col-md-4">
                  <div class="form-group label-floating is-empty is-focused">
                    <label class="control-label">Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{$perfil->facebook}}">
                    <span class="material-input"></span></div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group label-floating is-empty is-focused">
                      <label class="control-label">Google +</label>
                      <input type="text" class="form-control" name="google" value="{{$perfil->google}}">
                      <span class="material-input"></span></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating is-empty is-focused">
                        <label class="control-label">Whatsapp</label>
                        <input type="text" class="form-control" name="whatsapp" value="{{$perfil->whatsapp}}">
                        <span class="material-input"></span></div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group label-floating is-empty is-focused">
                          <label class="control-label">Twitter</label>
                          <input type="text" class="form-control" name="twitter" value="{{$perfil->twitter}}">
                          <span class="material-input"></span></div>
                        </div>
                      </div>
                      <div class="row">
                        <p class="col-sm-12">Información Ubicación</p>
                        <div class="col-md-3">
                          <div class="form-group label-floating is-empty is-focused">
                            <label class="control-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" value="{{$perfil->direccion}}" >
                            <span class="material-input"></span></div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group label-floating is-empty is-focused">
                              <label class="control-label">Ciudad</label>
                              <input type="text" class="form-control" name="ciudad" value="{{$perfil->ciudad}}" >
                              <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group label-floating is-empty is-focused">
                                <label class="control-label">Pais</label>
                                <input type="text" class="form-control" name="pais" value="{{$perfil->pais}}">
                                <span class="material-input"></span></div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group label-floating is-empty is-focused">
                                  <label class="control-label">Codigo Postal</label>
                                  <input type="text" class="form-control" name="codigo_postal" value="{{$perfil->codigo_postal}}">
                                  <span class="material-input"></span></div>
                                </div>
                              </div>
                              <div class="row">
                                <h4 class="col-sm-12">Medios de pago</h4>

                                <div class="col-md-12">
                                 @foreach ($mediospago as $medio)
                                  <figure class="col-xs-12 col-sm-3 logo-pago" id="img-advcash">
                                    <img class="logo-pago logo-pago-admin" src="{{asset('theme/admin/img')}}/{{$medio->imagen}}" alt="{{$medio->nombre}}">
                                    <div class="col-sm-12">
                                      <div class="form-group label-floating is-focused is-empty">
                                        <label class="control-label ">Link {{$medio->nombre}}</label>
                                        <input type="text" class="form-control" name="medio[{{$medio->id}}]" value="{{$medio->link}}" >
                                        <span class="material-input"></span></div>
                                      </div>
                                    </figure>
                                  @endforeach
                                </div>
                              </div>
                                        <label class="checkbox-inline"><input type="checkbox" name="terminos" value="1" checked="true" required="">Acepta Terminos y Condiciones</label>

                                        <button type="submit" class="btn btn-primary pull-right">Actualizar Perfil</button>
                                        <div class="clearfix"></div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="card card-profile">
                                    <div class="card-avatar">
                                      <a href="#p">
                                        <img class="img" src="{{asset("theme/admin/img/faces/marc.jpg")}}">
                                      </a>
                                    </div>
                                    <div class="content">
                                      <h6 class="category text-gray">Nivel 1</h6>
                                      <h4 class="card-title">{{ App\Http\Controllers\HelperController::nombre_usuario() }}</h4>
                                      <p class="">
                                        Link De Asociado:
                                      </p>
                                      {{ App\Http\Controllers\HelperController::link_asociado() }}
                                      <br/><br/>
                                    </div>
                                    <p>Descarga el material de ayuda, informate con los tutoriales de la plataforma.</p>
                                    <a href="descargas.html" class="btn btn-primary btn-round">Material de apoyo</a>
                                  </div>
                                </div>
                              </div>

                              @stop

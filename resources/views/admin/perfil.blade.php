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
        <form>
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
                  <input type="email" class="form-control">
                  <span class="material-input"></span></div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Confirmar Contraseña</label>
                    <input type="tel" class="form-control">
                    <span class="material-input"></span></div>
                  </div>
                </div>
                <div class="row">
                  <p class="col-sm-12">Datos de usuario</p>
                  <div class="col-md-4">
                    <div class="form-group label-floating is-empty">
                      <label class="control-label">Nombre de usuario</label>
                      <input type="text" class="form-control">
                      <span class="material-input"></span></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating is-empty">
                        <label class="control-label">Apellidos</label>
                        <input type="text" class="form-control">
                        <span class="material-input"></span></div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Numero de Telefono</label>
                          <input type="tel" class="form-control">
                          <span class="material-input"></span></div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group label-floating is-empty">
                            <label class="control-label">Numero de Telefono 2</label>
                            <input type="tel" class="form-control">
                            <span class="material-input"></span></div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group label-floating is-empty">
                              <label class="control-label">Correo Electornico</label>
                              <input type="email" class="form-control">
                              <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group label-floating is-empty">
                                <label class="control-label">Edad</label>
                                <input type="number" class="form-control">
                                <span class="material-input"></span></div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <select class="form-control" id="genero">
                                    <option>Genero </option>
                                    <option>Mujer </option>
                                    <option>Hombre</option>
                                  </select>
                                  <span class="material-input"></span></div>
                                </div>
                              </div>
                              <div class="row">
                                <p class="col-sm-12">Redes Sociales</p>
                                <div class="col-md-4">
                                  <div class="form-group label-floating is-empty">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" class="form-control">
                                    <span class="material-input"></span></div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                      <label class="control-label">Google +</label>
                                      <input type="text" class="form-control">
                                      <span class="material-input"></span></div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group label-floating is-empty">
                                        <label class="control-label">Whatsapp</label>
                                        <input type="text" class="form-control">
                                        <span class="material-input"></span></div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group label-floating is-empty">
                                          <label class="control-label">Twiter</label>
                                          <input type="text" class="form-control">
                                          <span class="material-input"></span></div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <p class="col-sm-12">Informacion Ubicacion</p>
                                        <div class="col-md-3">
                                          <div class="form-group label-floating is-empty">
                                            <label class="control-label">Direccion</label>
                                            <input type="text" class="form-control">
                                            <span class="material-input"></span></div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group label-floating is-empty">
                                              <label class="control-label">Ciudad</label>
                                              <input type="text" class="form-control">
                                              <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="form-group label-floating is-empty">
                                                <label class="control-label">Pais</label>
                                                <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                              </div>
                                              <div class="col-md-3">
                                                <div class="form-group label-floating is-empty">
                                                  <label class="control-label">Codigo Postal</label>
                                                  <input type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                              </div>
<div class="row">
  <h4 class="col-sm-12">Medios de pago</h4>
  <p class="col-sm-12">Medios de pago</p>
  <div class="col-md-12">
    <figure class="col-xs-12 col-sm-3 logo-pago" id="img-advcash">
      <img class="logo-pago logo-pago-admin" src="{{asset("theme/admin/img/paypal.png")}}" alt="advcash">
      <div class="col-sm-12">
        <div class="form-group label-floating is-focused is-empty">
          <label class="control-label ">Link Paypal</label>
          <input type="text" class="form-control">
          <span class="material-input"></span></div>
        </div>
      </figure>
      <figure class="col-xs-12 col-sm-3 logo-pago" id="img-advcash">
        <img class="logo-pago logo-pago-admin" src="{{asset("theme/admin/img/squarecash.png")}}" alt="advcash">
        <div class="col-sm-12">
          <div class="form-group label-floating is-focused is-empty">
            <label class="control-label">Link Square Cash</label>
            <input type="text" class="form-control ">
            <span class="material-input"></span></div>
          </div>
        </figure>
        <figure class="col-xs-12 col-sm-3 logo-pago" id="img-advcash">
          <img class="logo-pago logo-pago-admin" src="{{asset("theme/admin/img/payeer.png")}}" alt="advcash">
          <div class="col-sm-12">
            <div class="form-group label-floating is-focused is-empty">
              <label class="control-label">Link Payeer</label>
              <input type="text" class="form-control ">
              <span class="material-input"></span></div>
            </div>
          </figure>
          <figure class="col-xs-12 col-sm-3 logo-pago" id="img-advcash">
            <img class="logo-pago logo-pago-admin" src="{{asset("theme/admin/img/circle.png")}}" alt="advcash">
            <div class="col-sm-12">
              <div class="form-group label-floating is-focused is-empty">
                <label class="control-label">Link Circle</label>
                <input type="text" class="form-control ">
                <span class="material-input"></span></div>
              </div>
            </figure>
            <figure class="col-xs-12 col-sm-3 logo-pago" id="img-advcash">
              <img class="logo-pago logo-pago-admin" src="{{asset("theme/admin/img/coinpayments.png")}}" alt="advcash">
              <div class="col-sm-12">
                <div class="form-group label-floating is-focused is-empty">
                  <label class="control-label">Link Coin Payments</label>
                  <input type="text" class="form-control ">
                  <span class="material-input"></span></div>
                </div>
              </figure>
            </div>
          </div>
          <label class="checkbox-inline"><input type="checkbox" value="" required="">Acepta Terminos y Condiciones</label>

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
        <h6 class="category text-gray">CEO / Co-Founder</h6>
        <h4 class="card-title">Alec Thompson</h4>
        <p class="card-content">
          Link De Asociado: <br>
          <span>www.letsmakeprofit.com/sdfdfsdfd</span>
        </p>
      </div>
      <p>Descarga el material de ayuda, informate con los tutoriales de la plataforma.</p>
      <a href="descargas.html" class="btn btn-primary btn-round">Material de apoyo</a>
    </div>
  </div>
</div>

@stop

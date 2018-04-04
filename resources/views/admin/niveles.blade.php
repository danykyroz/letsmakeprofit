@extends('layouts.admin')
@section('body')
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header" data-background-color="green">
        <i class="material-icons">content_copy</i>
      </div>
      <div class="card-content">
        <p class="category">Creditos</p>
        <h3 class="title"> <small>USD $</small><span>1500</span>
        </h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons ">warning</i>
          Historial por activaciones
        </div>
      </div>
    </div>
  </div>
</div>
<!--     niveles    -->
<div class="row">
  <div class="col-md-11">

    <div class="card">

      <!--     acordiom   -->
      <div id="accordion">


        <div class="card">
          <div class="card-header " data-background-color="">
            <h4 class="title">Nivel 1</h4>
            <p class="category">CADA PERSONA QUE REGISTRES BAJO TU CUENTA TE ENVÍA 1OUSD.
              PARA ACTIVAR ESTA ONDA, ENVÍE 10 USD A CADA PERSONA ARRIBA DE TU NIVEL.
              <span class="">IMPORTANTE: NOTIFIQUE A CADA PERSONA DESPUÉS DE SU PAGO</span></p>
            </div>
            <!--     acordiom   -->
            <div id="accordion">
              <!--     accion    -->
              <!--     usuario 3   -->

              <div class="card">
                <div class=" level-head collapsed" data-toggle="collapse" data-target="#user-3">
                  <p class="col-xs-1 col-sm-1">1</p>
                  <figure class="col-xs-3 col-sm-2">
                    <img src="{{asset('theme/admin/img/faces/marc.jpg')}}">
                  </figure>
                  <p class="col-xs-5 col-sm-3"> <strong>Pedro Alverto valero ruiz</strong></p>
                  <p class="col-xs-3 col-sm-3 text-primary">Nivel: <span>1</span></p>
                  <div class="col-xs-3 col-sm-2 actived-btn">

                    <span><i class="material-icons">done</i>OK</span>
                  </div>
                </div>
                <!--     contenedores    -->

                <div class="collapse card-content col-sm-12 " id="user-3">
                  <div class="card-bodys col-sm-12">
                    <!--     Tarjeta de Contacto   -->
                    <div class="col-sm-4">
                      <h4 class="title">Informacion Personal</h4>
                      <p>Tarjeta de contacto</p>
                      <div class="card-footer">
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

                    <!--     Medios de Pago   -->
                    <div class="col-sm-8">
                      <h4 class="title">Medios de pago</h4>
                      <p>¿CÓMO LE GUSTARÍA PAGAR? SELECCIONE SU MÉTODO PREFERIDO:</p>

                      <div class="card-footer col-sm-12" id="medios-de-pago">
                        <!--     pago  1 -->
                        <a class="col-xs-6 col-sm-4 logo-pago" id="img-advcash" data-toggle="pill" href="#user-3advcash">
                          <img src="{{asset('theme/admin/img/advcash.png')}}" alt="advcash">
                        </a>

                      </div>

                      <!--     contenedores    -->
                      <div class="tab-content">
                        <!--     contenedor 1   -->
                        <div class="col-sm-12 tab-pane fade" id="user-3advcash">
                          <p><strong>Paso 1. Envíe un giro por <span class="span-pago">Advcash</span> de USD10 a:</strong> <br> Informacion para la transaccion por: <span class="span-pago">Advcash</span>   </p>
                          <div class="card-footer">
                            <div class=" stats-info">Nombre:    <span>4:31</span></div>
                            <div class=" stats-info">Numero de Cuenta en <span class="span-pago">Advcash</span> : <span>6:01</span></div>
                            <a class="btn btn-info" href="#" role="button">Ir a Advcash </a>
                          </div>
                          <br>
                          <p><strong>PASO 2.  notificar NOTIFICAR <span class="span-usuario">PRESTIGE30 </span>  DESPUÉS DE SU PAGO:</strong> <br> Una vez que se completa su pago, debe hacer clic en 'Notificar prestige30' boton de abajo.  prestige30 Luego buscará su pago y MANUALMENTE activará su posición n. ° 1. Ayuda prestige30  encuentra tu pago:</p>
                          <p></p>
                          <form>

                            <div class="form-group is-empty">
                              <label for="text-confirm">Haga saber al usuario con un mensaje de su pago</label>
                              <textarea class="form-control" id="text-confirm" rows="3"></textarea>
                              <span class="material-input"></span></div>

                              <strong>Subir un comprobante de la transaccion (Opcional) </strong>
                              <input id="input-b5" class="btn" name="input-b5[]" type="file" multiple="">
                              <input class="btn btn-danger" value="Enviar">


                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div><! fin card !-->


                        <!--     usuario 4   -->

                        <div class="card">
                          <div class=" level-head collapsed" data-toggle="collapse" data-target="#user-4" aria-expanded="false">
                            <p class="col-xs-1 col-sm-1">1</p>
                            <figure class="col-xs-3 col-sm-2">
                              <img src="{{asset('theme/admin/img/faces/marc.jpg')}}">
                            </figure>
                            <p class="col-xs-5 col-sm-3"> <strong>Pedro Alverto valero ruiz</strong></p>
                            <p class="col-xs-3 col-sm-3 text-primary">Nivel: <span>1</span></p>
                            <div class="col-xs-3 col-sm-2 actived-btn">

                              <span><i class="material-icons">done</i>OK</span>
                            </div>
                          </div>
                          <!--     contenedores    -->

                          <div class="collapse card-content col-sm-12 " id="user-4">
                            <div class="card-bodys col-sm-12">
                              <!--     Tarjeta de Contacto   -->
                              <div class="col-sm-4">
                                <h4 class="title">Informacion Personal</h4>
                                <p>Tarjeta de contacto</p>
                                <div class="card-footer">
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

                              <!--     Medios de Pago   -->
                              <div class="col-sm-8">
                                <h4 class="title">Medios de pago</h4>
                                <p>¿CÓMO LE GUSTARÍA PAGAR? SELECCIONE SU MÉTODO PREFERIDO:</p>

                                <div class="card-footer col-sm-12" id="medios-de-pago">
                                  <!--     pago  1 -->
                                  <a class="col-xs-6 col-sm-4 logo-pago" id="img-advcash" data-toggle="pill" href="#user-4advcash">
                                    <img src="{{asset('theme/admin/img/advcash.png')}}" alt="advcash">
                                  </a>

                                </div>

                                <!--     contenedores    -->
                                <div class="tab-content">
                                  <!--     contenedor 1   -->
                                  <div class="col-sm-12 tab-pane fade" id="user-4advcash">
                                    <p><strong>Paso 1. Envíe un giro por <span class="span-pago">Advcash</span> de USD10 a:</strong> <br> Informacion para la transaccion por: <span class="span-pago">Advcash</span>   </p>
                                    <div class="card-footer">
                                      <div class=" stats-info">Nombre:    <span>4:31</span></div>
                                      <div class=" stats-info">Numero de Cuenta en <span class="span-pago">Advcash</span> : <span>6:01</span></div>
                                      <a class="btn btn-info" href="#" role="button">Ir a Advcash </a>
                                    </div>
                                    <br>
                                    <p><strong>PASO 2.  notificar NOTIFICAR <span class="span-usuario">PRESTIGE30 </span>  DESPUÉS DE SU PAGO:</strong> <br> Una vez que se completa su pago, debe hacer clic en 'Notificar prestige30' boton de abajo.  prestige30 Luego buscará su pago y MANUALMENTE activará su posición n. ° 1. Ayuda prestige30  encuentra tu pago:</p>
                                    <p></p>
                                    <form>

                                      <div class="form-group is-empty">
                                        <label for="text-confirm">Haga saber al usuario con un mensaje de su pago</label>
                                        <textarea class="form-control" id="text-confirm" rows="3"></textarea>
                                        <span class="material-input"></span></div>

                                        <strong>Subir un comprobante de la transaccion (Opcional) </strong>
                                        <input id="input-b5" class="btn" name="input-b5[]" type="file" multiple="">
                                        <input class="btn btn-danger" value="Enviar">


                                      </form>
                                    </div>
                                  </div>
                                </div>

                                      </div>
                                    </div>
                                  </div>

                                </div><!fin accordion !-->
                              </div><!fin card !-->
                            </div><!fin md11 !-->
                          </div> <!fin row !-->

                          @stop

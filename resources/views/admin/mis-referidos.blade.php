@extends('layouts.admin')
@section('body')

<div class="row">
  <!--     Mis Referidos    -->
  <div class="card">
    <div class="col-md-12">

      <div class="card-header" data-background-color="red">
        <h4 class="title">Mis Referidos</h4>
        <p class="category">Aqui puede ver los referidos que van asociados a su cuenta (LINK) </p>
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
              <tr>
                <td>{{ $data["referido"]["names"] }} {{ $data["referido"]["last_names"] }}</td>
                <td><a href="mis-referidos/detalle/{{$data['referido']['refid']}}">{{ $data["referido"]["refid"] }}</a> </td>
                <td>{{ $data["perfil"]->telefono }} </td>
                <td>{{ $data["perfil"]->email }} </td>
                <td>Nivel {{ $data["referido"]->nivel }} </td>
                <td><button class="btn btn-primary" data-toggle="modal" data-target=".modal-tarjeta-usuario"><i class="material-icons">unarchive</i>Ver<div class="ripple-container"></div></button></td>

              </tr>

              @endforeach


            </tbody>
          </table>
          {{ $referidos->links() }}

        </div>
      </div>
    </div>
  </div>
<!--     modal    -->
<div class="modal fade modal-tarjeta-usuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="card" style=" overflow-y:  scroll; max-height:  500px;">
      <div class="level-head" data-toggle="collapse" data-target="#user-3" aria-expanded="true">
        <p class="col-xs-1 col-sm-1">1</p>
        <figure class="col-xs-3 col-sm-2">
          <img src="{{asset("theme/admin/img/faces/marc.jpg")}}">
        </figure>
        <p class="col-xs-5 col-sm-3"> <strong>Pedro Alverto valero ruiz</strong></p>
        <p class="col-xs-3 col-sm-3 text-primary">Nivel: <span>1</span></p>
        <div class="col-xs-3 col-sm-2 actived-btn">
          <span><i class="material-icons">done</i>OK</span>
        </div>
      </div>
      <!--     contenedores    -->
      <div class="card-content col-sm-12 collapse in" id="user-3" aria-expanded="true" style="">
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
                <img src="{{asset("theme/admin/img/advcash.png")}}" alt="advcash">
              </a>
              <!--     pago  2 -->
              <a class="col-xs-6 col-sm-4 logo-pago" data-toggle="pill" href="#user-3airtelmoney" id="img-airtelmoney">
                <img src="{{asset("theme/admin/img/airtelmoney.png")}}" alt="airtelmoney">
              </a>
              <!--     accion  3 -->
              <a class="col-xs-6 col-sm-4 logo-pago" data-toggle="pill" href="#user-3airtm" id="img-airtm">
                <img src="{{asset("theme/admin/img/airtm.png")}}" alt="airtm">
              </a>
              <!--     accion  4 -->
              <a class="col-xs-6 col-sm-4 logo-pago" data-toggle="pill" href="#user-3alipay" id="img-alipay">
                <img src="{{asset("theme/admin/img/alipay.png")}}" alt="alipay">
              </a>
              <!--     accion  5 -->
              <a class="col-xs-6 col-sm-4 logo-pago" data-toggle="pill" href="#user-3bitcoin" id="img-bitcoin">
                <img src="{{asset("theme/admin/img/bitcoin.png")}}" alt="bitcoin">
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
                <!--     contenedor 2   -->
                <div class="col-sm-12 tab-pane fade" id="user-3airtelmoney">
                  <p><strong>Paso 1. Envíe un giro por <span class="span-pago">Airtelmoney</span> de USD10 a:</strong> <br> Informacion para la transaccion por: <span class="span-pago">Airtelmoney</span>   </p>
                  <div class="card-footer">
                    <div class=" stats-info">Nombre:    <span>4:31</span></div>
                    <div class=" stats-info">Numero de Cuenta en <span class="span-pago">Airtelmoney</span> : <span>6:01</span></div>
                    <a class="btn btn-info" href="#" role="button">Ir a Airtelmoney </a>
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
                  <!--     contenedor 3   -->
                  <div class="col-sm-12 tab-pane fade" id="user-3airtm">
                    <p><strong>Paso 1. Envíe un giro por <span class="span-pago">Airtm</span> de USD10 a:</strong> <br> Informacion para la transaccion por: <span class="span-pago">Airtm</span>   </p>
                    <div class="card-footer">
                      <div class=" stats-info">Nombre:    <span>4:31</span></div>
                      <div class=" stats-info">Numero de Cuenta en <span class="span-pago">Airtm</span> : <span>6:01</span></div>
                      <a class="btn btn-info" href="#" role="button">Ir a Airtm </a>
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
                    <!--     contenedor 4   -->
                    <div class="col-sm-12 tab-pane fade" id="user-3alipay">
                      <p><strong>Paso 1. Envíe un giro por <span class="span-pago">Alipay</span> de USD10 a:</strong> <br> Informacion para la transaccion por: <span class="span-pago">Alipay</span>   </p>
                      <div class="card-footer">
                        <div class=" stats-info">Nombre:    <span>4:31</span></div>
                        <div class=" stats-info">Numero de Cuenta en <span class="span-pago">Alipay</span> : <span>6:01</span></div>
                        <a class="btn btn-info" href="#" role="button">Ir a Alipay </a>
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
                      <!--     contenedor 5  -->
                      <div class="col-sm-12 tab-pane fade" id="user-3bitcoin">
                        <p><strong>Paso 1. Envíe un giro por <span class="span-pago">BitCoin</span> de USD10 a:</strong> <br> Informacion para la transaccion por: <span class="span-pago">BitCoin</span>   </p>
                        <div class="card-footer">
                          <div class=" stats-info">Nombre:    <span>4:31</span></div>
                          <div class=" stats-info">Numero de Cuenta en <span class="span-pago">BitCoin</span> : <span>6:01</span></div>
                          <a class="btn btn-info" href="#" role="button">Ir a BitCoin </a>
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
            </div>
          </div>
        </div>

@stop

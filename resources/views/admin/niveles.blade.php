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
        <h3 class="title"> <small>USD $</small><span>{{ Session::get( 'creditos' )  }}</span>
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
<?php $contador=0;?>
@foreach ($niveles as $nivel)

<div class="row">
  <div class="col-md-12">

        <div class="card">
          <div class="card-header " data-background-color="">
            <h4 class="title">Nivel {{$nivel->nivel}}</h4>
            <p class="category">CADA PERSONA QUE REGISTRES BAJO TU CUENTA TE ENVÍA {{ $nivel->dinero }} USD.
              PARA ACTIVAR ESTA ONDA, ENVÍE {{ $nivel->dinero }} USD A CADA PERSONA ARRIBA DE TU NIVEL.
              <span class="">IMPORTANTE: NOTIFIQUE A CADA PERSONA DESPUÉS DE SU PAGO</span></p>
            </div>
            <!--     acordiom   -->
            <div id="accordion">
              <!--     accion    -->
              <!--     usuario 3   -->
              @foreach($listniveles[$nivel->nivel] as $row )
              <?php $contador ++; ?>
              <div class="card">
                <div class=" level-head collapsed" data-toggle="collapse" data-target="#user{{$row['referido']->id}}-nivel{{$nivel->nivel}}-contador{{$contador}}">
                  <p class="col-xs-1 col-sm-1">1</p>
                  <figure class="col-xs-3 col-sm-2">
                    <img src="{{asset('theme/admin/img/faces/marc.jpg')}}">
                  </figure>
                  <p class="col-xs-5 col-sm-3"> <strong>{{$row['referido']->names}} {{$row['referido']->last_names}}</strong></p>
                  <p class="col-xs-3 col-sm-3 text-primary">Nivel: <span>{{$nivel->nivel}}</span></p>
                  <div class="col-xs-3 col-sm-2 actived-btn">

                    <span><i class="material-icons">done</i>OK</span>
                  </div>
                </div>
                <!--     contenedores    -->

                <div class="collapse card-content col-sm-12 " id="user{{$row['referido']->id}}-nivel{{$nivel->nivel}}-contador{{$contador}}">
                  <div class="card-bodys col-sm-12">
                    <!--     Tarjeta de Contacto   -->
                    <div class="col-sm-4">
                      <h4 class="title">Información Personal</h4>
                      <p>Tarjeta de contacto</p>
                      <div class="card-footer">
                        <div class=" stats-info">Telefono:<span>{{$row['perfil']->telefono}}</span></div>
                        <div class=" stats-info">Email: <span>{{ $row['perfil']->email }}</span></div>
                        <div class=" stats-info">Facebook:<span>{{ $row['perfil']->facebook }}</span></div>
                        <div class=" stats-info">Google+:  <span>{{ $row['perfil']->twitter }}</span></div>
                        <div class=" stats-info">Whatsapp:  <span>{{ $row['perfil']->whatsapp }}</span></div>
                        <div class=" stats-info">Dirección: <span>{{ $row['perfil']->direccion }}</span></div>
                        <div class=" stats-info">Ciudad:  <span>{{ $row['perfil']->ciudad }}</span></div>
                        <div class=" stats-info">Pais: <span>{{ $row['perfil']->pais }}</span></div>
                        <div class=" stats-info">Zip/Postal code: <span>{{ $row['perfil']->codigo_postal }}</span></div>
                        <div class=" stats-info">Genero: <span>@if ($row['perfil']->genero=="M") Mujer @else Hombre @endif</span></div>
                      </div>
                    </div>

                    <!--     Medios de Pago   -->
                    <div class="col-sm-8">
                      <h4 class="title">Medios de pago</h4>
                      <p>¿CÓMO LE GUSTARÍA PAGAR? SELECCIONE SU MÉTODO PREFERIDO:</p>

                      <div class="card-footer col-sm-12" id="medios-de-pago">
                        <!--     pago  1 -->
                        @foreach($row["mediospago"] as $medio)
                          <a class="col-xs-6 col-sm-4 logo-pago" id="img-advcash" data-toggle="pill" href="#user-nivel{{$nivel->nivel}}-{{$medio->id}}-{{$contador}}">
                            <img src="{{asset('theme/admin/img')}}/{{$medio->imagen}}" alt="{{$medio->nombre}}">
                          </a>

                        @endforeach

                      </div>

                      <!--     contenedores    -->
                      <div class="tab-content">
                        <!--     contenedor 1   -->
                        @foreach($row["mediospago"] as $medio)

                        <div class="col-sm-12 tab-pane fade" id="user-nivel{{$nivel->nivel}}-{{$medio->id}}-{{$contador}}">
                          <p><strong>Paso 1. Envíe un giro por <span class="span-pago">{{$medio->nombre}}</span> de {{$nivel->dinero}} USD a: {{$row['referido']->names}} {{$row['referido']->last_names}}</strong> <br> Información para la transaccion por: <span class="span-pago">{{$medio->nombre}}</span>   </p>
                          <div class="card-footer">
                            <div class=" stats-info">Nombre: <span>{{$medio->nombre}}</span></div>
                            <div class=" stats-info">Número de Cuenta en <span class="span-pago">{{$medio->nombre}}</span> : <span>{{$medio->numero}}</span></div>
                            <a class="btn btn-info" href="http://{{$medio->link}}" role="button" target="_blank">Ir a {{$medio->nombre}} </a>
                          </div>
                          <br>
                          <p><strong>PASO 2.  notificar NOTIFICAR <span class="span-usuario">{{$row['referido']->names}} {{$row['referido']->last_names}} </span>  DESPUÉS DE SU PAGO:</strong> <br> Una vez que se completa su pago, debe hacer clic en 'Notificar {{$row['referido']->names}} {{$row['referido']->last_names}}' boton de abajo.  {{$row['referido']->names}} {{$row['referido']->last_names}} Luego buscará su pago y MANUALMENTE activará su posición n. ° {{$nivel->nivel}}. Ayuda a {{$row['referido']->names}} {{$row['referido']->last_names}}  encuentra tu pago:</p>
                          <p></p>

                          //Averiguar si ya pago //
                          @if (!$row["notificacion_pago"])
                          <form action="{{@route('notificar_pago')}}" name="frmuser{{$row['perfil']->id}}-nivel{{$nivel->nivel}}-medio{{$medio->id}}-cont{{$contador}}" id="frmuser{{$row['perfil']->id}}-nivel{{$nivel->nivel}}-medio{{$medio->id}}-cont{{$contador}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="nivel" value="{{ $nivel->nivel }}">
                          <input type="hidden" name="referido_id" value="{{ $row['referido']->id}}">
                          <input type="hidden" name="medio_id" value="{{ $medio->id}}">

                            <div class="form-group is-empty">
                              <label for="text-confirm">Haga saber al usuario con un mensaje de su pago</label>

                              <textarea class="form-control comentarios" name="comentarios"  rows="3"></textarea>
                              <span class="material-input"></span></div>

                              <strong>Subir un comprobante de la transaccion (Opcional) </strong>
                              <input  class="btn file" name="file"  type="file" >
                              <input class="btn btn-danger btn-large notificar" value="Notificar {{$row['referido']->names}} {{$row['referido']->last_names}}">
                            </form>
                          @endif
                          </div>
                        @endforeach

                        </div>
                      </div>
                    </div>
                  </div>
                </div><! fin card !-->
                @endforeach
                <!--     usuario 4   -->
              </div><!fin accordion !-->
              </div><!fin card !-->

        </div>
      </div>

@endforeach

<div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="modalAlert" aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">

  <div class="modal-content" >
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Alerta</h5>
      </div>
      <div class="modal-body" id="modal-body">


          <div class="alert alert-success" id="modalalert-success" style="display:none">
            <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">X</i></span>
                </button>
                <b>Ok:</b> <span id="alert-mensaje-success">Link asociado actualizado exitosamente.</span>
            </div>
        </div>
        <div class="alert alert-danger" id="modalalert-danger" style="display:none">
            <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">error_outline</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>Error:</b> <span id="alert-mensaje-bad">El link de asociado no esta disponible.</span>
            </div>
        </div>


      </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" id="cerrar-link-asociado" data-dismiss="modal">Cerrar</button>

  </div>
  </div>

</div>
</div>


@stop

@section('add-scripts')
<script type="text/javascript">
  $(document).ready(function(){

    $(".notificar").click(function(){
      formpadre=$(this).parent();
      comentarios=$(formpadre).find(".comentarios").val();
      formData=new FormData();

      data=$(formpadre).serializeArray();
      var url=$(formpadre).attr("action");

      for (k in data){
        formData.append(data[k].name,data[k].value);
      }

      divfile=$(formpadre).find(".file");
      formData.append("file", $(divfile)[0].files[0]);

      $.ajax({
          url: url,
          data: formData,
          cache: false,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function (response) {
              // do something with the result
              json=JSON.parse(response);
              if(json.success){
                $("#modalalert-success").show();
                $("#alert-mensaje-success").text(json.mensaje);
                $("#modalAlert").modal("show");
              }else{
                alert("Error");
                console.log(json);
              }
          },
          error:function(){
           alert("Por favor complete los campos");
          }

      });

    })

  })

</script>
@stop

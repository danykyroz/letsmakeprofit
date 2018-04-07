    <div class="card" style=" overflow-y:  scroll; max-height:  500px;">
      <div class="level-head" data-toggle="collapse" data-target="#user-3" aria-expanded="true">
       
        <figure class="col-xs-3 col-sm-2">
          <img src="{{asset("theme/admin/img/faces/marc.jpg")}}">
        </figure>
        <p class="col-xs-5 col-sm-3"> <strong> {{$cliente->names}} {{$cliente->last_names }}</strong></p>
        <p class="col-xs-3 col-sm-3 text-primary">Nivel: <span>{{$cliente->nivel}}</span></p>
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
              <div class=" stats-info">Teléfono:<span>{{$perfil->telefono}}</span></div>
              <div class=" stats-info">Email: <span>{{$perfil->email}}</span></div>
              <div class=" stats-info">Facebook:<span>{{$perfil->facebook}}</span></div>
              <div class=" stats-info">Google+:  <span>{{$perfil->google}}</span></div>
              <div class=" stats-info">Whatsapp:  <span>{{$perfil->whatsapp}}</span></div>
              <div class=" stats-info">Dirección: <span>{{$perfil->direccion}}</span></div>
              <div class=" stats-info">Ciudad:  <span>{{$perfil->ciudad}}</span></div>
              <div class=" stats-info">Pais: <span>{{$perfil->pais}}</span></div>
              <div class=" stats-info">Zip/Postal code: <span>{{$perfil->codigo_postal}}</span></div>
              <div class="novisible-info stats-info">Genero: <span>@if ($perfil->genero=="M") Mujer @else Hombre @endif</span></div>
            </div>
          </div>
          <!--     Medios de Pago   -->
          <div class="col-sm-8">
            <h3>Medios de pago</h3>
                  @foreach ($mediospago as $medio)
                    <figure class="col-xs-12 col-sm-4 logo-pago" id="img-advcash">
                      <img class="logo-pago logo-pago-admin" src="{{asset('theme/admin/img')}}/{{$medio->imagen}}" alt="{{$medio->nombre}}">
                      <div class="col-sm-12">
                        <div class="form-group label-floating is-focused is-empty">
                          <label class="control-label col-sm-8 ">Link:{{$medio->link}}</label>
                          
                          <span class="material-input"></span></div>
                        </div>
                      </figure>
                    @endforeach
          </div>
        </div>
      </div>
  </div>
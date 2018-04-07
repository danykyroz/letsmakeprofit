<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dasboard Lets Make Profit </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('layouts.includes.admin-styles')
    @yield('add-styles')
    <style>
    .link-asociado{
      padding: 8px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        @include('layouts.includes.admin-sidebar')
        <div class="main-panel">
            <nav class="navbar navbar-absolute">
               @include('layouts.includes.admin-navbar')
            </nav>
            <div class="content">
                <div class="container-fluid">
                   @yield('body')
              </div>
              <!-- fin container !-->
          </div>
            <footer class="footer">
                <div class="container-fluid">
                   @include('layouts.includes.admin-footer')
                </div>
            </footer>
        </div>
    </div>
    <button type="button" class="btn btn-primary" id="btnModal" data-toggle="modal" data-target="#modalUser" style="display:none">Cambiar Link
</button>

    <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modalUser" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Editar Link Asociado</h5>
            
          </div>
          <div class="modal-body">
            <form>
              <div class="alert alert-success" id="modaluser-success" style="display:none">
                <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">X</i></span>
                    </button>
                    <b>Ok:</b> Link asociado actualizado exitosamente.
                </div>
            </div>
            <div class="alert alert-danger" id="modaluser-danger" style="display:none">
                <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">error_outline</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Error:</b> El link de asociado no esta disponible.
                </div>
            </div>
              <div class="form-group">
                 <label for="exampleInput1" class="bmd-label-floating">Ingresa un nombre de asociado</label>
                 <input type="text" class="form-control" id="modal-username">
                 <span class="bmd-help">El nombre debe ser sin espacios ni caracteres especiales.</span>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="cerrar-link-asociado" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="guardar-link-asociado">Guardar</button>
          </div>
        </div>
      </div>
    </div>

   <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="modalUser" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
      
    <div class="modal-content" > 
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="exampleModalLabel">Información Asociado</h5>
        </div>
        <div class="modal-body" id="modal-perfil">
        <p>Cargando Perfil...</p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="cerrar-link-asociado" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar-link-asociado">Guardar</button>
    </div> 
    </div>
    
  </div>
</div>


</body>
<!--   Core JS Files   -->
 @include('layouts.includes.admin-scripts')
 @yield('add-scripts')
 <script>
$(document).ready(function(){
  $("#guardar-link-asociado").click(function(e){
    e.preventDefault();
    var username=$("#modal-username").val();
    $.get("/admin/changeuserlink",{username:username},function(response){
     json=JSON.parse(response);
     console.log(json)
     if(json.success){
       $("#modaluser-success").show();
       $("#modaluser-danger").hide();
     }else{
       $("#modaluser-success").hide();
       $("#modaluser-danger").show();
     }
    })
  })

  $("#cerrar-link-asociado").click(function(e){
    e.preventDefault();
    location.reload();
    })


})

 function editar_link_asociado(id){
   $("#btnModal").click();
 }
 </script>
</html>

@extends('layouts.admin')
@section('body')
<div class="row">
  <div class="col-md-9">
    <div class="card">
      <div class="card-header" data-background-color="red">
        <h4 class="title">Notificaciones</h4>
        <p class="category">Aqui puedes ver todas las notificaciones de acciones en la plataforma</p>
      </div>
      @foreach ($notificaciones as $notificacion)

        @if ($notificacion->tipo==1) <?php  $tipo="alert-success" ?>
          @elseif ($notificacion->tipo==2) <?php  $tipo="alert-warning" ?>
          @else <?php $tipo="alert-danger" ?>
        @endif
      <div class="card-content">
        <div class="alert {{$tipo}} alert-with-icon" data-notify="container" >
          <button type="button" aria-hidden="true" class="close" data-id="{{ $notificacion->id }}" data-dismiss="alert" aria-label="Close">×</button>
          <i data-notify="icon" class="material-icons">assignment turned in
          </i>
          <span data-notify="message">{{$notificacion->titulo}} <br> {{ $notificacion->mensaje}} </span>
        </div>
      </div>
      @endforeach

    </div>
  </div>
  <div class="col-md-3">

  </div>
</div>

@stop

@section ('add-scripts')
<script>
$(document).ready(function(){
  $(".close").click(function(){
    var id=($(this).data("id"));
    $.get("/admin/notificacion/delete",{id:id},function(){

    })
  })
})
</script>
@stop


</section>

</section>

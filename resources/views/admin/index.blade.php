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
                <h3 class="title"> <small>USD $</small><span>{{$creditos}}</span>

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
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="purple">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Mis Referidos</p>
                <h3 class="title"><small>No: </small>{{$total_referidos}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Referidos X mi Link.

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="blue">
                <i class="material-icons">info_outline</i>
            </div>
            <div class="card-content">
                <p class="category">Tiempo</p>
                <h3 class="title"><small>Dias: </small>{{$dias}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Tiempo desde el registro
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-chart" data-background-color="red">
                <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-content">
                <h4 class="title">Grafica de referidos</h4>
                <p class="category">Puede ver su evolucion en la plataforma para asi tomar las mejores decisiones</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> Grafica de <span>ENERO 2017 </span> a <span>ENERO 2018</span>
                </div>
            </div>
        </div>
    </div>
     <div class="col-lg-4 col-md-12">
        <div class="card ">
            <div class="card-header" data-background-color="purple">
              <h4 class="title">Tareas por Realizar</h4>
                <p class="category"></p>
            </div>
            <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" @if ($cliente->refid!="") checked="true" @endif>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Nombre de asociado.</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs" data-toggle="modal" data-target="#modalUser">
                                          @if ($cliente->refid=="")
                                            <i class="material-icons">editar</i>
                                           @endif
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox" @if($perfil->telefono!="" and $perfil->direccion!="") checked="cheked" @endif>
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                            </label>
                                        </div>
                                    </td>
                                    <td>Completa tu perfil.</td>
                                    <td class="td-actions text-right">
                                        <a href="{{route('perfil')}}" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                            <i class="material-icons">editar</i>
                                        </a>

                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                        <div class="checkbox" @if($cliente->nivel>="1") checked="cheked" @endif  >
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                            </label>
                                        </div>
                                    </td>
                                    <td>Subir Nivel.</td>
                                    <td class="td-actions text-right">
                                        <a href="{{route('niveles')}}" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                            <i class="material-icons">editar</i>
                                        </a>

                                    </td>
                                </tr>

                            </tbody>
                        </table>


            </div>
</div>

</div>

@stop

@section('add-scripts')

<script type="text/javascript">
    $(document).ready(function() {
        demo.initDashboardPageCharts();
    });
</script>

@stop

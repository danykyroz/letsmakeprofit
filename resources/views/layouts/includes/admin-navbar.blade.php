<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Dashboard </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Mike John responded to your email</a>
                    </li>
                    <li>
                        <a href="#">You have 5 new tasks</a>
                    </li>
                    <li>
                        <a href="#">You're now friend with Andrew</a>
                    </li>
                    <li>
                        <a href="#">Another Notification</a>
                    </li>
                    <li>
                        <a href="#">Another One</a>
                    </li>
                </ul>
            </li>
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">person</i>
                    <span class="notification">5</span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                </a>
                <ul class="dropdown-menu">
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
                        {{ App\Http\Controllers\HelperController::link_asociado() }}

                    </p>


                </div>

                    <a href="/admin/perfil" class="btn btn-primary btn-round">editar</a>
            </div>
             <li>
                        <a href="/logout">Cerrar sesion</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">dashboard</i>
                    <p class="hidden-lg hidden-md">Dashboard</p>
                </a>
            </li>

        </ul>

    </div>
</div>

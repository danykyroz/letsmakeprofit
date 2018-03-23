<div class="sidebar" data-color="red" data-image="img/sidebar-1.jpg">

    <div class="logo">
        <a href="#" class="simple-text">
            Nivel
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard')? 'active': '' }}">
                <a href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/niveles')? 'active': '' }}">
                <a href="/admin/niveles">
                    <i class="material-icons">person</i>
                    <p>Niveles</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/notificaciones')? 'active': '' }}">
                <a href="/admin/notificaciones">
                    <i class="material-icons">content_paste</i>
                    <p>Notificaciones</p>
                </a>
            </li>
              <li class="{{ Request::is('admin/activaciones')? 'active': '' }}">
                <a href="/admin/activaciones">
                    <i class="material-icons">library_books</i>
                    <p>Activados</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/mis-referidos')? 'active': '' }}">
                <a href="/admin/mis-referidos">
                    <i class="material-icons">bubble_chart</i>
                    <p>Mis Referidos</p>
                </a>
            </li>

            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Material de apoyo</p>
                </a>
            </li>
        </ul>
    </div>
</div>

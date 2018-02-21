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
</body>
<!--   Core JS Files   -->
 @include('layouts.includes.admin-scripts')
 @yield('add-scripts')
</html>

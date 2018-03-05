<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
  <title>Let`s Make Profit | </title>
  @include('layouts.includes.web-common-metas')
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Css -->
	<link rel="stylesheet" href="{{ asset("theme/css/core.min.css") }}" />
	<link rel="stylesheet" href="{{ asset("theme/css/custom.css") }}" />
  @yield('estilos')

</head>
<body class="shop home-page">

	<!-- Overlay Navigation Menu -->
	<div class="overlay-navigation-wrapper" data-no-scrollbar data-animation="scale-in">
	 @include('layouts.includes.web-common-navigation')
	</div>
	<!-- Overlay Navigation Menu End -->
  <!-- Header -->
  <header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
   @include('layouts.includes.web-common-header')
  </header>
  <div class="content clearfix">
  	<!-- Header End -->
	<div class="wrapper reveal-side-navigation">
			<div class="wrapper-inner">
				@yield('body')
			</div>
			<!-- Content End -->
		</div>
	</div>
  <!-- Footer -->
  <footer class="footer">
   @include('layouts.includes.web-common-footer')
  </footer>

  @yield('scripts')
</body>
</html>

@extends('layouts.web')
@section('body')
	<!-- Feature login  -->
	<section class="section-block feature-3 bkg-theme">
		<div class="row flex">
			<div class="column width-6 push-6">

			</div>
			<div class="column width-6 pull-6 center">

			</div>
		</div>
	</section>
	<!-- Feature login -->

	<!-- Pricing Options -->
	<section class="section-block">
		<div class="row flex">
			<div class="column width-12 center">
				<h2 class="mb-80">Lorem ipsum dolor </h2>
			</div>

			<div class="column width-4 v-align-middle">
				<div class="feature-column">
					<div class="feature-text">
						<h2 class="mb-30">Lorem ipsum dolor sit amet, consectetur </h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
						<p class="mb-mobile-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</div>
			</div>

			<div class="column width-8">
				<h2>!Felicitaciones {{ $nombre }} {{ $apellido }}</h2>
				<div class="contact-form-container">

					<div class="alert alert-success">
				  		<strong>Activacion de cuenta Exitosa!</strong> Ahora puedes iniciar sesión y empezar a usar nuestro sistema de referidos.
							<br><a href="/login">Inicar Sesión</a>
					</div>
					<div class="form-response"></div>
				</div>
			</div>

		</div>
	</section>
@stop

@section('scripts')

<script type="text/javascript"  src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
errores=0;
 $("#email").blur(function(e){
	 $.get("existe_email",{email:$(this).val()},function(response){
		  console.log(response);
			if(response.success){
				$("#email").parent().find("span").remove();
				$("#email").parent().append($("<span id='error_email'>Email ya esta siendo usado por otro usuario</span>"));
				errores++;
			}else{
				$("#email").parent().find("span").remove();
				if(errores>0){
					errores--;
				}
			}
	 });

 })

	$("#enviar-form").click(function(e){
		e.preventDefault();
		var validar_form=$( "#frm-registro" ).valid();
		if(validar_form){
			if(errores==0){
					$("#frm-registro").submit();
			}else{
				alert("Verifique que el correo no este siendo usado por otro usuario");
			}

		}
	})


	$( "#frm-registro" ).validate({
			rules: {
				name:{
					required:true,
					minlength: 3
				},
				last_name:
				{
					required: true,
					minlength: 3
				},
				email: {
					required: true,
					email: true
				},
				date:{
					required:true
				},
				avatar:{
					required: true
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				terminos:{
					required: true
				}

			},
			messages: {
				name: "Please enter your firstname",
				last_name: "Please enter your lastname",
				email: "Please enter a valid email address",
				terminos: "Please accept our policy"
			},

			errorPlacement: function ( error, element ) {

				if ( element.prop( "type" ) === "checkbox" ) {
					error.insertAfter( element.parent( ".checkboxes" ) );
				} else {
					error.insertAfter( element );
				}
			},
			highlight: function ( element, errorClass, validClass ) {
				$( element ).parents( ".field-wrapper" ).addClass( "has-error" ).removeClass( "has-success" );
			},
			unhighlight: function (element, errorClass, validClass) {
				$( element ).parents( ".field-wrapper" ).addClass( "has-success" ).removeClass( "has-error" );
			}
		});
})

</script>

@stop

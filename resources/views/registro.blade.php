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

				@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
				<p class="mb-mobile-50">Fue Referido Por <span class="referidocolor">{{ $nombre }}</span></p>
				<div class="contact-form-container">
					<form class="contact-form" action="/registro/new" method="post" novalidate="" id="frm-registro"  >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_parentId" value="{{ $relid }}">

						<div class="row">
							<div class="column width-6">
								<div class="field-wrapper">
									<input type="text" name="name" value="" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required="">
								</div>
							</div>
							<div class="column width-6">
								<div class="field-wrapper">
									<input type="text" name="last_name" value="" class="form-lname form-element large" placeholder="Last Name" tabindex="2">
								</div>
							</div>
							<div class="column width-6">
								<div class="field-wrapper">
									<input type="email" name="email" value="" id="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required="">
								</div>
							</div>

							<div class="column width-6">
								<div class="field-wrapper">
									<input type="text" name="date" class="form-aux form-date form-element large" value="" placeholder="Day/Month/Year" tabindex="5">
								</div>
							</div>

							<div class="column width-6">
								<div class="field-wrapper">
									<input type="password" id="password" name="password" value="" class="form-password form-element large" placeholder="Password" tabindex="4" required="">
								</div>
							</div>

							<div class="column width-6">
								<div class="field-wrapper">
									<input type="password" id="confirm_password" name="password_confirmation" value="" class="form-password form-element large" placeholder="Confirmar Password" tabindex="6" required="">
								</div>
							</div>

							<div class="column width-12">
								<div class="field-wrapper pt-10 pb-10">
									<input id="radio-1" class="form-element radio" name="avatar" type="radio"  checked="true" value="1" >
									<label for="radio-1" class="radio-label">Avatar1</label>
									<input id="radio-2" class="form-element radio" name="avatar" type="radio" value="2">
									<label for="radio-2" class="radio-label">Avatar2</label>
									<input id="radio-3" class="form-element radio" name="avatar" type="radio" value="3" >
									<label for="radio-3" class="radio-label">Avatar3</label>
									<input id="radio-4" class="form-element radio" name="avatar" type="radio" value="4" >
									<label for="radio-4" class="radio-label">Avatar4</label>
									<input id="radio-5" class="form-element radio" name="avatar" type="radio" value="5" >
									<label for="radio-5" class="radio-label">Avatar5</label>
									<input id="radio-6" class="form-element radio" name="avatar" type="radio" value="6" >
									<label for="radio-6" class="radio-label">Avatar6</label>
								</div>
							</div>
							<div class="column width-6">
								<input type="text" name="honeypot" class="form-honeypot form-element">
							</div>
						</div>
						<div class="row">

							<div class="column width-12">
								<div class="field-wrapper pt-10 pb-10 checkboxes" >
									<input id="terminos" name="terminos" type="checkbox" value="1"  required="">
									<label for="checkbox-1" class="checkbox-label" >Acepto terminos y condiciones</label>
								</div>
							</div>
							<div class="column width-12">
								<input type="submit" value="Registrarme" id="enviar-form" class="medium bkg-theme bkg-hover-theme color-white color-hover-white" style="cursor:pointer">
							</div>
						</div>
					</form>
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

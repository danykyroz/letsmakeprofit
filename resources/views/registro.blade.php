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
				<p class="mb-mobile-50">Fue Referido Por <span class="referidocolor">LOREN IMPUS</span></p>
				<div class="contact-form-container">
					<form class="contact-form" action="/registro/new" method="post" novalidate="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="row">
							<div class="column width-6">
								<div class="field-wrapper">
									<input type="text" name="name" value="Daniel" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required="">
								</div>
							</div>
							<div class="column width-6">
								<div class="field-wrapper">
									<input type="text" name="last_name" value="Quiroz" class="form-lname form-element large" placeholder="Last Name" tabindex="2">
								</div>
							</div>
							<div class="column width-6">
								<div class="field-wrapper">
									<input type="email" name="email" value="danykyroz@gmail.com" class="form-email form-element large" placeholder="Email address*" tabindex="3" required="">
								</div>
							</div>


							<div class="column width-6">
								<div class="field-wrapper">
									<input type="text" name="date" class="form-aux form-date form-element large" value="29/11/1987" placeholder="Day/Month/Year" tabindex="5">
								</div>
							</div>

							<div class="column width-12">
								<div class="field-wrapper pt-10 pb-10">
									<input id="radio-1" class="form-element radio" name="avatar" type="radio"  checked="true" >
									<label for="radio-1" class="radio-label">Avatar1</label>
									<input id="radio-2" class="form-element radio" name="avatar" type="radio">
									<label for="radio-2" class="radio-label">Avatar2</label>
									<input id="radio-3" class="form-element radio" name="avatar" type="radio" >
									<label for="radio-3" class="radio-label">Avatar3</label>
									<input id="radio-4" class="form-element radio" name="avatar" type="radio" >
									<label for="radio-4" class="radio-label">Avatar4</label>
									<input id="radio-5" class="form-element radio" name="avatar" type="radio" >
									<label for="radio-5" class="radio-label">Avatar5</label>
									<input id="radio-6" class="form-element radio" name="avatar" type="radio" >
									<label for="radio-6" class="radio-label">Avatar6</label>
								</div>
							</div>
							<div class="column width-6">
								<input type="text" name="honeypot" class="form-honeypot form-element">
							</div>
						</div>
						<div class="row">

							<div class="column width-12">
								<div class="field-wrapper pt-10 pb-10">
									<input id="checkbox-1" class="form-element checkbox" name="checkbox-1" type="checkbox" checked="true" required="">
									<label for="checkbox-1" class="checkbox-label" >I agree to the terms</label>
								</div>
							</div>
							<div class="column width-12">
								<input type="submit" value="Send Email" class="medium bkg-theme bkg-hover-theme color-white color-hover-white">
							</div>
						</div>
					</form>
					<div class="form-response"></div>
				</div>
			</div>

		</div>
	</section>
@stop
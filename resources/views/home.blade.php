@extends('layouts.web')
@section('body')
  <section class="section-block feature-3 bkg-theme">
    <div class="row flex">
      <div class="column width-4 push-6">
        <div class="feature-content">
          <div class="feature-content-inner center-on-mobile pt-40 pt-mobile-80">
            <h1 class="color-white mb-20">Lorem ipsum dolor sit amet, consectetur ..</h1>
            <p class="color-white">Lorem ipsum dolor sit amet, consecte turLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet.</p>
            <a href="/registro" class="button medium text-uppercase border-white bkg-hover-charcoal color-white color-hover-white left mb-20 mb-mobile-50">
              <span class="icon-app-store left"></span>Registro
            </a>
          </div>
        </div>
      </div>
      <div class="column width-6 pull-6 offset-2 center">
        <div class="feature-image">
          <div class="feature-image-inner pt-20 no-padding-on-mobile">
            <img src="images/feature-iphone-1.jpg" width="" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature Section 3 -->

  <!-- Features -->
  <section class="section-block bkg-grey-ultralight">
    <div class="row">
      <div class="column width-12 center">
        <h2 class="mb-80">Lorem ipsum dolor r</h2>
      </div>
      <div class="column width-7 v-align-middle">
        <div class="feature-column">
          <div class="feature-text">
            <h2 class="mb-30">Lorem ipsum dolor sit amet</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consecte turLorem ipsum dolor sit.</p>
            <p class="mb-mobile-50">Lorem ipsum dolor sit amet, consecte turLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consecte turLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
      <div class="column width-5">
        <div class="feature-column medium left">
          <span class="feature-icon icon-adjust icon-circled medium bkg-theme color-white"></span>
          <div class="feature-text">
            <h6 class="weight-bold text-uppercase">Lorem ipsum dolor</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
      </div>
      <div class="column width-5">
        <div class="feature-column medium left">
          <span class="feature-icon icon-colours icon-circled medium bkg-theme color-white"></span>
          <div class="feature-text">
            <h6 class="weight-bold text-uppercase">Lorem ipsum dolor</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Features -->
<!-- Call to Action Section -->
  <div class="section-block replicable-content pt-60 pb-30 call-to-action-2 call-to-action-2-1 bkg-grey-ultralight background-cover">
    <div class="row">
      <div class="column width-6 offset-3 center color-white horizon" data-animate-in="preset:flipInY;duration:1000ms;" data-threshold="1">
        <p class="weight-light">Lorem ipsum dolor sit amet, consectetur </p>
      </div>
      <div class="column width-6 offset-3 center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:300ms;" data-threshold="1">
        <a class="button medium text-uppercase bkg-theme border-hover-white color-white color-hover-white left mb-50">
          <span class="icon-app-store left "></span>Suscribirce
        </a>
      </div>
    </div>
  </div>
  <!-- Call to Action Section End -->


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

    </div>
  </section>
  <!-- Pricing Options End -->
  <section class="section-block signup-1 bkg-theme">
    <div class="row">
      <div class="column width-8 offset-2 center">
        <div class="signup-form-container">
          <h2 class="color-white">Lorem ipsum dolor sit amet, consectetur adipiscing </h2>
          <p class="mb-30 color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit!</p>
          <form class="signup-form merged-form-elements" action="php/subscribe.php" method="post" novalidate>
            <div class="row">
              <div class="column width-7 offset-1">
                <div class="field-wrapper">
                  <input type="email" name="email" class="form-email form-element large" placeholder="Correo Electronico*" tabindex="2" required>
                </div>
              </div>
              <div class="column width-3 center">
                <input type="submit" value="Enviar" class="form-submit button large bkg-charcoal bkg-hover-charcoal color-white color-hover-white">
              </div>
            </div>
            <input type="text" name="honeypot" class="form-honeypot form-element">
          </form>
          <div class="form-response show"></div>
        </div>
      </div>
    </div>
  </section>
@stop

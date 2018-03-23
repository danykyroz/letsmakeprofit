  @extends('layouts.web')
  @section('body')
  				<!-- Feature login  -->
  				<section class="section-block feature-3 bkg-theme">
  					<div class="row flex">
  						<div class="column width-6 push-6">
  							<div class="login">
    <div class="login_title">
      <span>Login </span>
    </div>

    @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
  <form action="userlogin" id="frm-login" method="post" >

     {{csrf_field()}}
    <div class="login_fields">
      <div class="login_fields__user">
        <div class="icon">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png">
        </div>
        <input placeholder="Username" type="text" name="email">
          <div class="validation">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png">
          </div>

      </div>
      <div class="login_fields__password">
        <div class="icon">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png">
        </div>
        <input placeholder="Password" type="password" name="password">
        <div class="validation">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png">
        </div>

      </div>
      <div class="login_fields__submit">
      <input type="submit" id="submit-login" name="Enviar" value="Entrar">
        <div class="forgot">
          <a href="#">Nueva contraseña?</a>
        </div>
      </div>

</form>


    </div>
   <div class="success">
      <h2>Authentication Success</h2>
      <p>Welcome back</p>
    </div>
    <div class="disclaimer">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper laoreet placerat. Nullam semper auctor justo, rutrum posuere odio vulputate nec.</p>
    </div>
  </div>
  <div class="authent">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg">
    <p>Authenticating...</p>
  </div>

  						</div>
  						<div class="column width-6 pull-6 center">
  							<div class="feature-image">
  								<div class="feature-image-inner pt-20 no-padding-on-mobile">
  									<img src="images/feature-iphone-1.jpg" width="" alt="">
  								</div>
  							</div>
  						</div>
  					</div>
  				</section>
  				<!-- Feature login -->




  			</div>
  @stop
  @section('scripts')
  <script>
  $(document).ready(function(){
    $("#submit-login").click(function(e){
      e.preventDefault();
      //alert("Enviando");
      $("#frm-login").submit();


    })

  })
  </script>
  @stop

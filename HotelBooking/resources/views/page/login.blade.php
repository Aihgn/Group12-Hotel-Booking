$extends('layouts.app')
@section('content')
<div class="section background-dark over-hide">
			<div class="form-center-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-8 col-sm-6">							
							<div class="login">
								<h1 class="text-center mb-4">Login</h1>
								<div class="login-input">
									<input type="text" id="email" required>
									<label for="email">Email</label>
								</div>

								<div class="login-input">
									<input type="Password" id="password" required>
									<label for="password">Password</label>
								</div>
									
								<div class="text-center col-6  col-sm-4 col-lg-12 mb-4">
									<a class="login-button" href="">Login</a>
								</div>

								<div  class="text-center col-6 col-sm-4 col-lg-12 mb-3">
									<a class="account-help" href="">Forgot password</a> |
									<a class="account-help" href="register.html">Create a new account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		

			<div class="slideshow">
				<div class="slide">
					<figure class="slide__figure">
						<div class="slide__figure-inner">
							<div class="slide__figure-img" style="background-image: url(./img/home-background.jpg)"></div>
						</div>
					</figure>
				</div>
			</div>
		</div>
		@endsection
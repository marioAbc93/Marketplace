<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrarse -Marketplace</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('img/core-img/logomk.png') }}"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('LR/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('LR/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('LR/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('LR/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('LR/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('img/core-img/logomk.png') }}" alt="logo" width="200px" height="200px">
				</div>

				<form class="login100-form validate-form" method="post" action="{{ route('register') }}">
          @csrf
					<span class="login100-form-title">
						Registrarse
					</span>
          <div class="wrap-input100 validate-input" data-validate = "Nombre">
            <input class="input100" type="text" name="name" placeholder="Nombre de usuario">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>
					<div class="wrap-input100 validate-input" data-validate = "Introducir correo valido: correo@ejemplo.com">
						<input class="input100" type="text" name="email" placeholder="Correo electronico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
          <div class="wrap-input100 validate-input" data-validate = "Contraseña">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Confirmar contraseña">
						<input class="input100" type="password" name="password_confirmation" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="text-center p-t-12">

						<a class="txt2" href="{{ route('welcome')}}">
							Volver al sitio
						</a>
					</div>


				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('LR/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('LR/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('LR/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('LR/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('LR/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('LR/js/main.js') }}"></script>

</body>
</html>

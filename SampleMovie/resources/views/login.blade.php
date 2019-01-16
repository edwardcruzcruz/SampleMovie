<!doctype html> 

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 


<head>		
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="empresa de servicions tecnologicos">
		
	<title>Formulario</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="{{asset('css/style1.css')}}" rel="stylesheet">
	
</head>


<body>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<div id="yes" class="text-center">
		<h1>Sample Movies</h1>
	</div>
	</div>
	</div>
	<hr>
	<br>

	<div class="row">
		<div class="myway">
			<div class="panel panel-login">


				<div class="panel-heading">
					<div class="row">
						<div class="col-6 col-sm-6">
							<a href="{{ URL::to('login')}}" class="active" id="login-form-link">Login</a>
						</div>
						<div class="col-6 col-sm-6">
							<a href="{{ URL::to('registro')}}" id="register-form-link">Register</a>
						</div>
					</div>
					<hr>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">



							<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group text-center">
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label for="remember"> Remember Me</label>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
								</div>
							</form>






						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

</body>
</html>

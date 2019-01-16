<!doctype html> 

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 


<head>		
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="empresa de servicions tecnologicos">
		
	<title>Inicio</title>

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
	</div>
	
	<div class="row">
	<div class="col-lg-12">
	<div id="yes" class="text-center">
		<h1>Sample Movies</h1>
	</div>
	</div>
	</div>
	<hr>
	<br>
</div>

<div class="container-fluid">
	<div class="row  ">
		<div class="col-3">
			<!--APLIACIONES WEB-->
			<div class="col-12">
				<div class="menu">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link">Nombre</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link">Correo</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link">Pelicula Alquilada</a>
					</li>
					<li>
						<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cancelar">
					</li>


				</ul>
				</div>
			</div>
		</div>	
<div class=col-9>	
<div id"no" class="container-fluid">
	<div class="col-4">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Nombre Pelicula</h5>
		    <p class="card-text">Descripcion Pelicula</p>
		    <a href="#" class="btn btn-primary">Alquilar</a>
		  </div>
		</div>
	</div>

	<div class="col-4">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Nombre Pelicula</h5>
		    <p class="card-text">Descripcion Pelicula</p>
		    <a href="#" class="btn btn-primary">Alquilar</a>
		  </div>
		</div>
	</div>

	<div class="col-4">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Nombre Pelicula</h5>
		    <p class="card-text">Descripcion Pelicula</p>
		    <a href="#" class="btn btn-primary">Alquilar</a>
		  </div>
		</div>
	</div>

	<div class="col-4">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Nombre Pelicula</h5>
		    <p class="card-text">Descripcion Pelicula</p>
		    <a href="#" class="btn btn-primary">Alquilar</a>
		  </div>
		</div>
	</div>

	<div class="col-4">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Nombre Pelicula</h5>
		    <p class="card-text">Descripcion Pelicula</p>
		    <a href="#" class="btn btn-primary">Alquilar</a>
		  </div>
		</div>
	</div>
</div>
</div>
</div>
</div>


</body>
</html>

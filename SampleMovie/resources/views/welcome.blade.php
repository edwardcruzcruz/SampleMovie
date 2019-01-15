<!doctype html> 

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 

<head> 

	<meta charset="utf-8"> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<title>Laravel</title> 

</head> 

<body> 

	<div class="jumbotron text-center"> 

	<h1>Welcome To Laravel!</h1> 

	<p>This is the laravel top 10</p> 

	<form action="{{URL::to('top')}}"  method="POST">
	   {{csrf_field()}}
	   <div class="form-group">
		<label for"nombre">Id</label>
	   	<input class="form-control" type="text" name="id" id="id" placeholder="ingrese un id">
	   </div>
	   <button type="submit" class="btn btn-primary" name="button">Buscar</button>
	</form>

	</div> 

</body> 


</html>

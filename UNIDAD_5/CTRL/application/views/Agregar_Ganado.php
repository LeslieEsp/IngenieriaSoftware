<!DOCTYPE html>
<html>
<head><style type="text/css">

body {
  
  background: url(https://raw.githubusercontent.com/LeslieEsp/IngenieriaSoftware/master/imagenes/sheep-690198_1920.jpg) no-repeat;
  background-size: cover;

}

</style>
<title>Agregar Ganado</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>

<br>
<hr>
<div class="row"> 
	<div class="col-lg-4 col-lg-offset-4 col-xs-12">
		<form action="insertarganado" method="POST">
		  <div class="form-group">
		    <label style="color:#FFFFFF" for="text">Raza:</label>
		    <input type="text" class="form-control" name="Raza">
		  </div>
			<div class="form-group">
		    <label style="color:#FFFFFF" for="text">Fecha nacimiento:</label>
		    <input type="text" class="form-control" name="Fecha_Nacimiento">
		  </div>
			<div class="form-group">
		    <label style="color:#FFFFFF" for="text">Status:</label>
		    <input type="text" class="form-control" name="Status">
		  </div>
		  <div class="form-group">
		    <label style="color:#FFFFFF" for="text">Fecha muerte:</label>
		    <input type="text" class="form-control" name="Fecha_Muerte" >
		  </div>
		
		  <input type="submit" name="Guardar" href="insertarganado">

		</form>
	</div>
</div>


</body>
</html>
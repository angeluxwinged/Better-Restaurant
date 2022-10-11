<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Better Restauant</title>
	 <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
	
	<!-- nav bar -->
	<div class="nav">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

       		<ul class="navbar-nav mb-2 mb-lg-0 me-auto">
        		<li class="nav-item">
        			<a class="nav-link active" aria-current="page" href="index.php">Better Restaurant</a>
        		</li>

        		<li class="nav-item">
        			<a class="nav-link active" aria-current="page" href="content/pizzerias.php">Pizzerías</a>
        		</li>

        		<li class="nav-item">
        			<a class="nav-link active" aria-current="page" href="content/hamburgueserias.php">Hamburgueserías</a>
        		</li>

        		<li class="nav-item">
        			<a class="nav-link active" aria-current="page" href="content/alitas.php">Alitas</a>
        		</li>
      		</ul>

      		<ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
      			<li class="nav-item diver">
        			<a class="nav-link" href="#">Facebook</a>
        		</li>
      		</ul>
		</nav>
	</div>


	<!-- contenido principal -->
	<div class="main">
		<div class="main-content">
	  		<img src="images/logo.png"><hr>

	  		<div class="content-2">
		  		<h2>Better Restaurant</h2><br>

		  		<p>
		  		Sitio web destinado a la comparación de los precios en los menús de distintos restaurantes locales.<br>
		  		Better Restaurant es un proyecto independiente con la única finalidad de proveer información publica a los usuarios.<br>
		  		Contáctanos vía <a href="mailto:Angeluxwinged@gmail.com?subject=Contacto" target="_blank">e-mail</a> o en nuestras redes sociales.
		  		</p>

		  		<form class="btn-facebook" action="https://www.facebook.com/" method="submit" target="_blank">
		  			<button type="submit">
		  				<img src="images/facebook.png">
		  			</button>
		  		</form>
  			</div>
  		</div>
	</div>
	
  	
</body>
</html>
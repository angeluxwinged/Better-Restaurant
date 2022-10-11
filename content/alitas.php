<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alitas</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
	<div id="contenedor">
		<!-- nav bar -->
		<div class="nav">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	       		<ul class="navbar-nav mb-2 mb-lg-0 me-auto">
	        		<li class="nav-item">
	        			<a class="nav-link active" aria-current="page" href="../index.php">Better Restaurant</a>
	        		</li>

	        		<li class="nav-item">
	        			<a class="nav-link active" aria-current="page" href="pizzerias.php">Pizzerías</a>
	        		</li>

	        		<li class="nav-item">
	        			<a class="nav-link active" aria-current="page" href="hamburgueserias.php">Hamburgueserías</a>
	        		</li>

	        		<li class="nav-item">
	        			<a class="nav-link active" aria-current="page" href="alitas.php">Alitas</a>
	        		</li>
	      		</ul>

	      		<ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
	      			<li class="nav-item diver">
	        			<a class="nav-link" href="#">Facebook</a>
	        		</li>
	      		</ul>
			</nav>
		</div>

		<!-- contenido menus -->
		<div class="card-container">
			<div class="card" v-for="e in alitas">
				<h3> {{ e.nombreAlitas }} </h3>
				<div class="precios">
					<p><b>Precios</b><br>
					Orden de 6pzs: <span v-if="e.o6pzs!=null">{{ e.o6pzs }} pesos</span><span v-else="">No disponible</span> <br>
					Orden de 12pzs: <span v-if="e.o12pzs!=null">{{ e.o12pzs }} pesos</span><span v-else="">No disponible</span> <br>
					Orden de 18pzs: <span v-if="e.o18pzs!=null">{{ e.o18pzs }} pesos</span><span v-else="">No disponible</span> <br>
					<a v-bind:href="e.menuAlitas" target="_blank">¡Checa su menú completo!</a>
				</p>
				</div>
				<p><b>Dirección</b><br>
				{{ e.direccionAlitas }}</p>
				<img v-bind:src="e.logoAlitas">
			</div>
		</div>

	</div>


	<script src="../js/script.js"></script>
</body>
</html>
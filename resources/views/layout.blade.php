<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Estilos de Bootstrap y datatables.net -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<!-- Estilos personalizados en la ruta Public/css/ -->
	<link rel="stylesheet" href="/css/styles.css">
	<!-- Scripts de jQuery, Bootstrap y datatable.net -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- Script personalizado para seleccion hasta 10 pokemones -->
	<script src="/js/script.js"></script>
	<title>Pokeapi Busqueda</title>
</head>
<body>
	@yield('contenido')
</body>
</html>

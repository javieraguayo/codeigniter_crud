<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</head>
<body>
<header>
	cabeza
</header>
<div id="container">

	<!-- aqui va el contenido de las vistas-->
	<div class="col-md-5">
	<?php
$this->load->view($contenido);

?>
	</div>
</div>
<footer>

</footer>

</body>

</html>

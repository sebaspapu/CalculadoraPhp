<!DOCTYPE html>

<html lang="es">

<head>

   <title>Formulario de obtencion de datos</title>
   <meta charset="utf-8" />
</head>

<body>
	<?php

	if ($_GET['op'] == "+"){
		$resultado = $_GET['valor1'] + $_GET['valor2'] ;	
		echo "<h3> El resultado es $resultado </h3>";
	}elseif ($_GET['op'] == "-"){
		$resultado = $_GET['valor1'] - $_GET['valor2'] ;	
		echo "<h3> El resultado es $resultado </h3>";
	}elseif ($_GET['op'] == "*"){
		$resultado = $_GET['valor1'] * $_GET['valor2'] ;	
		echo "<h3> El resultado es $resultado </h3>";
	}elseif ($_GET['op'] == "/"){
		$resultado = $_GET['valor1'] / $_GET['valor2'] ;	
		echo "<h3> El resultado es $resultado </h3>";
	}
	?>
</body>
</html>
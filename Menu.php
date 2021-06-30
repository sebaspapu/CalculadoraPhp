<!DOCTYPE html>

<html lang="es">

<head>

   <title>Formulario de obtencion de datos</title>
   <meta charset="utf-8" />
</head>

<body>
    <form method="get" action="Resultado.php">
	<center><table>
	<tr>
		<td colspan=4><center><h2>Calculadora. Operaciones basicas</h2></center></td>
	<tr>
		<td >Valor 1: </td>
		<td colspan=3><input name="valor1" type="text" value="0"/></td>
	</tr>
	<tr>
		<td >Valor 2: </td>
		<td colspan=3><input name="valor2" type="text" value="0"/></td>
	</tr>
	<tr>
		<td><input type="radio" name="op" name="operacion" value="+" checked="checked">Suma</td>
		<td><input type="radio" name="op" name="operacion" value="-" >Resta</td>
		<td><input type="radio" name="op" name="operacion" value="*" >Multiplicación</td>
		<td><input type="radio" name="op" name="operacion" value="/" >División</td>
	<tr>
	<tr>
		<td colspan=2><center><input type="submit" value="Enviar"></center></td>
		<td colspan=2><center><input type="reset" value="Limpiar formulario"></center></td>
	</tr>

	</table></center>
	</form>
     

	</body>

</html>
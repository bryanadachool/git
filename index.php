<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form name="formulario" method ="post">
ingrese un numero
<input type="numero" name="n">
<input type="submit" name="mostar" value ="mostrar">


</form>

<?php
$mostrar=$_POST['n'];

echo $mostrar;

?>


</body>
</html>
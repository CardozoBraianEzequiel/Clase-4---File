<!DOCTYPE html>
<html>
<head>
	<title>Mi Koala</title>
</head>
<body>
<?php 
	$nombre = $_POST["nombreArchivo"];

echo "<img src=".$nombre.">";


?>
<form action="index.html" method="POST"><input type="submit" name="volver" value="Ir a la pagina anterior"></form>
</body>
</html>
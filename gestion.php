<?php 
//var_dump($_POST);


$array = explode(".",$_FILES["archivo"]["name"]);
$hora = date("His");

//$destino = "Fotos/"."Foto".$hora.".".$array[1];
$destino = "Fotos/"."Foto.".$array[1];
if(file_exists ($destino))
{
	$respuesta = explode("/", $destino);
	$respuesta2 = explode(".", $respuesta[1]);
	rename($destino,"BackUp/".$respuesta2[0].date("His").".".$respuesta2[1]);
	move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
}else
{
	move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
}

echo "Se movio la imagen ".$_FILES["archivo"]["name"]." correctamente";

echo "<form action=\"index.html\" method=\"POST\"><input type=\"submit\" name=\"volver\" value=\"Ir a la pagina anterior\"></form>";

?>

<?php 
//var_dump($_POST);

$array = explode(".",$_FILES["archivo"]["name"]);
$hora = date("His");

$destino = "Fotos/"."Foto".$hora.".".$array[1];

move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);

echo "Se movio la imagen ".$_FILES["archivo"]["name"]." correctamente";

?>

<?php 
	
$link = mysqli_connect("localhost", "root", "", "cv");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$emisor = mysqli_real_escape_string($link, $_REQUEST['emisor']);
$mensaje = mysqli_real_escape_string($link, $_REQUEST['mensaje']);
$asunto = mysqli_real_escape_string($link, $_REQUEST['asunto']);
$nombre = mysqli_real_escape_string($link, $_REQUEST['nombre']);
$fecha = date('Y-m-d H:i:s');



$sql = "INSERT INTO  registro (emisor, mensaje, asunto, nombre, fecha) VALUES ('$emisor', '$mensaje', '$asunto', '$nombre', '$fecha')";
if(mysqli_query($link, $sql)){
 //   echo "Records added successfully.";
} else{
  //  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

require "contact.php";

echo '<script language="javascript">';
echo 'alert("Registro agregado a la base de datos correctamente")';
echo '</script>';

 ?>


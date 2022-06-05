<?php
include("conectar.php");
error_reporting(0);
//recupero valores que vienen de las cajitas del formulario
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=($_POST['asunto']);
$mensaje=($_POST['mensaje']);
$fechaEnvio = date("Y-m-d");
//ahora guardo los datos en la tabla usuarios. incorporando con la funcion sql una cadena
$sql="INSERT INTO contactos (nombre,email,asunto,mensaje,fechaEnvio) values('$nombre','$email','$asunto','$mensaje','$fechaEnvio')";
//esta es la que realmente ejecuta
if(mysqli_query($acceso,$sql)){
    include("individual.php"); 
	
}else{
    include("individual.php"); 
	
}
?>
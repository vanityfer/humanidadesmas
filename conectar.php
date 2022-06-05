<?php 				//archivo fundamental para toda la aplicacion. sirve para ver si tengo conexión con la base de datos copiarlo al final
$base="c2540454_fer"; 
$acceso=mysqli_connect("localhost","root","",$base);
if($acceso){
//echo "estamos conectados"; 			//tengo acceso a la base de datos
}else{
    //include('individual.php');
    //echo "algo anda mal";   //no tengo acceso a la base de datos
} 
// tengo la conexion. creo la base y su estructura por detras. ahora tengo que crear los formularios que me conecten con la base y que me permitan guardar datos en la base. que datos armar para la base
// insert vs. select (reportes)
// 

?>
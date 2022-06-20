<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['cod_estudiante'];
$dni=$_GET['dni'];
$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>
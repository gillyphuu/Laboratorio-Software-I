<?php
include("conexion.php");
$con=conectar();

$cod_asignatura=$_GET['cod_asignatura'];
$nombre=$_GET['nombre'];
$creditos=$_GET['creditos'];
$categoria=$_GET['categoria'];


$sql="INSERT INTO asignatura VALUES('$cod_asignatura','$nombre','$creditos','$categoria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: asignatura.php");
    
}else {
}
?>
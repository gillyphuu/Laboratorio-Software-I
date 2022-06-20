<?php

include("conexion.php");
$con=conectar();

$cod_asignatura=$_GET['cod_asignatura'];
$nombre=$_GET['nombre'];
$creditos=$_GET['creditos'];
$categoria=$_GET['categoria'];

$sql="UPDATE asignatura SET nombre='$nombre',creditos='$creditos',categoria='$categoria' WHERE cod_asignatura='$cod_asignatura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: asignatura.php");
    }
?>
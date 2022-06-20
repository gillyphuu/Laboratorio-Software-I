<?php

include("conexion.php");
$con=conectar();

$cod_asignatura=$_GET['id'];

$sql="DELETE FROM asignatura  WHERE cod_asignatura='$cod_asignatura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: asignatura.php");
    }
?>

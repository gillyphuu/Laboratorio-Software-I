<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['cod_estudiante'];
$dni=$_GET['dni'];
$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];

$sql="UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
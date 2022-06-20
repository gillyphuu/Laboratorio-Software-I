<?php

include("conexion.php");
$con=conectar();

$cod_usuario=$_POST['cod_usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$destino="fotos/".$imagen;
copy($ruta,$destino);

$sql="UPDATE usuario SET password='$password',correo='$correo',imagen='$destino' WHERE cod_usuario='$cod_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
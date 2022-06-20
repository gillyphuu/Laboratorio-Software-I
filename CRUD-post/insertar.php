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


$sql="INSERT INTO usuario VALUES('$cod_usuario','$password','$correo','$imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>
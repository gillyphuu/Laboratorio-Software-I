<?php 
    include("conexion.php");
    $con=conectar();

$id=$_POST['id'];

$sql="SELECT * FROM usuario WHERE cod_usuario='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-6">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                    
                                <input type="hidden" name="cod_usuario" value="<?php echo $row['cod_usuario']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="cod_usuario" placeholder="Cod usuario" value="<?php echo $row['cod_usuario']  ?>">
                                <input type="password" class="form-control mb-3" name="password" placeholder="Contraseña" value="<?php echo $row['password']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
                                <input type="file" class="form-control mb-3" name="imagen" placeholder="Imagen" value="<?php echo $row['imagen']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
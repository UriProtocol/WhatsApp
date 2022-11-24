<?php
include_once("conexion.php");

$sql="SELECT * FROM contacto";
$resultado=mysqli_query($con, $sql);
$num_filas=mysqli_num_rows($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Contactos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <div class="container">
    <h1 style="text-align:center">Administrar Contactos</h1>
    <br>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Cel</th>
                <th>Whatsapp</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <?php while($fila=mysqli_fetch_assoc($resultado)){ ?>
                    <td><?php echo $fila['id_contacto'] ?></td>
                    <td><?php echo $fila['nombre_suc'] ?></td>
                    <td><?php echo $fila['direccion'] ?></td>
                    <td><?php echo $fila['email'] ?></td>
                    <td><?php echo $fila['tel'] ?></td>
                    <td><?php echo $fila['cel'] ?></td>
                    <td><?php echo $fila['whatsapp'] ?></td>
                    <td><a href="actualizar.php?id=<?php echo $fila['id_contacto'] ?>">Actualizar</a></td>
                <?php  } ?>
            </tr>
        </table>
    </div>
</body>
</html>
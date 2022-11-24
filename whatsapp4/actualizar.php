<?php 
include_once("conexion.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql="select * from contacto where id_contacto ='$id'";
    $resultado=mysqli_query($con, $sql);
    
    if($fila=mysqli_fetch_assoc($resultado)){
        //Envío los valores al formulario
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $cel=$_POST['cel'];
    $whatsapp=$_POST['whatsapp'];

    $sql="update contacto set nombre_suc='$nombre', direccion='$direccion', email='$email', tel='$tel', cel='$cel', whatsapp='$whatsapp' where id_contacto='$id'";

    $resultado=mysqli_query($con, $sql);

    if($resultado){
        echo "<script> alert('¡El contacto ha sido actualizado con éxito!') 
        window.location.href = 'administrar.php'</script>";
    }else{
        echo "<script> alert('El contacto no se ha podido actualizar correctamente') 
        window.location.href = 'administrar.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Contactos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <a href="administrar.php">Administrar</a>
    <div class="container">
    <h1 style="text-align: center">Actualizar contacto</h1>
    <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-floating">
                <input type="text" name="nombre" value="<?php echo $fila['nombre_suc'] ?>" class="form-control" placeholder="hola">
                <label for="nombre" class="form-label">Nombre: </label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" name="direccion" value="<?php echo $fila['direccion'] ?>" class="form-control" placeholder="hola">
                <label for="direccion" class="form-label">Dirección: </label>
            </div>
            <div class="form-floating mt-3">
                <input type="email" name="email" value="<?php echo $fila['email'] ?>" class="form-control" placeholder="hola">
                <label for="email" class="form-label">Email: </label>
            </div>
            <div class="form-floating mt-3">
                <input type="tel" name="telefono" value="<?php echo $fila['tel'] ?>" class="form-control" placeholder="hola">
                <label for="telefono" class="form-label">Telefono: </label>
            </div>
            <div class="form-floating mt-3">
                <input type="tel" name="cel" value="<?php echo $fila['cel'] ?>" class="form-control" placeholder="hola">
                <label for="cel" class="form-label">Celular: </label>
            </div>
            <div class="form-floating mt-3">
                <input type="tel" name="whatsapp" value="<?php echo $fila['whatsapp'] ?>" class="form-control" placeholder="hola">
                <label for="whatsapp" class="form-label">Whatsapp: </label>
            </div>
            <input type="hidden" value="<?php echo $fila['id_contacto'] ?>" name="id">
            <div class="d-flex justify-content-around mt-3">
                <input type="submit" name="guardar" value="Guardar" class="btn btn-primary btn-lg">
                <input type="reset" name="guardar" value="Guardar" class="btn btn-danger btn-lg">
            </div>
        </form>
    </div>
</body>
</html>
<?php



include("db.php");
 
if(isset($_POST['guardar'])){
    $nomnreP = $_POST['nombre'];
    $numeroCP = $_POST['numeroC'];
    $fechaAltaP = $_POST['fechaAlta'];
    $telefono1 = $_POST['telefono'];
    $edadP = $_POST['edad'];
    $totalTP = $_POST['totalT'];
    


    $query = "INSERT INTO cliente(nombre,numero_control,fecha_alta,telefono,edad,total_tratamiento) 
    VALUES('$nomnreP','$numeroCP','$fechaAltaP','$telefono1','$edadP','$totalTP')";
    $resultado= mysqli_query($conn,$query);
    if(!$resultado){
        die("Fallo");
    }
    $_SESSION['mensaje'] = "<br><h3>¡Registro exitoso!</h3>";
    $_SESSION['mensaje_tipo'] = 'success';
     header("Location:read_task.php"); 

    
    
}

?>
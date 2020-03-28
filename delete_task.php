<?php
include("db.php");

if(isset($_GET['id'])){
    $id_cliente=$_GET['id'];
    $query = "DELETE FROM cliente WHERE id_cliente = $id_cliente"; 
    $resultado= mysqli_query($conn,$query);
    if(!$resultado){
        die("Fallo");
    }
    $_SESSION['mensaje'] = "<br><h3>¡Registro eliminado!</h3>";
    $_SESSION['mensaje_tipo'] = 'success';
     header("Location:read_task.php"); 
}
?>
<h1>Eliminar usuario</h1>

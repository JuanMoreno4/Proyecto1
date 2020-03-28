<?php
include("db.php");
include("include/header.php");
?>


<?php


 
if(isset($_POST['guardarP'])){
    $fechaPago = $_POST['fechaPago'];
    $PagoCita = $_POST['PagoCita'];
    $idCliente = $_POST['idCliente'];

    $query = ("INSERT INTO pagos (fecha_pago, subtotal, id_cliente) VALUES ('$fechaPago','$PagoCita','$idCliente')");
    $resultado= mysqli_query($conn,$query);
    if(!$resultado){
        die("Fallo");
    }
    $_SESSION['mensaje'] = "<br><h3>¡Pago abonado!</h3>";
    $_SESSION['mensaje_tipo'] = 'info';

    //header("Location:save_pagos.php"); 

  
    
}
?>

<div class="container p-4">
    <div class=col-md-5>
        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-<?= $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje']  ?>

            </div>
    </div>
    <div class=col-md-5>
       <a class="btn btn-success" href="pagos.php?idCliente=<?php echo $idCliente;?>"> Volver </a>
    </div>

<?php session_unset();
} ?>
</div>

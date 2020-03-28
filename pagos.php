<?php 
include("db.php");
include("include/header.php");
if (isset($_GET["idCliente"])) {
    $idCliente = $_GET["idCliente"];
    $nombre_cliente = "";
}




?>

<div class="container p-4">
    <h2>AGREGAR NUEVO PAGO</h2> <br> <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-body">
                <form action="save_pagos.php" method="POST">
                    <div class="form-group">
                        <label for="">Fecha de pago:</label>
                        <input type="date" name="fechaPago" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Importe por cita $$:</label>
                        <input type="text" name="PagoCita" class="form-control">
                    </div>
                    <div>
                        <input type="hidden" name="idCliente" value="<?php echo $idCliente ?>">
                        <input type="submit" class="btn btn-primary btn-block" name="guardarP" value="Guardar">
                    </div>

                </form>

            </div>
        </div>

        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Fecha de pago</td>
                        <td>Cantidad $$</td>
                        <td>Nombre del Paciente</td>

                    </tr>
                <tbody>
                    <?php
                    $query = "SELECT p.fecha_pago, p.subtotal, c.nombre, c.id_cliente FROM pagos p 
                        INNER JOIN cliente c ON p.id_cliente = c.id_cliente
                        WHERE c.id_cliente = '$idCliente'";
                    $resgistros = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($resgistros)) { ?>
                        <tr>
                            <td><?php echo $row['fecha_pago'] ?></td>
                            <td><?php echo $row['subtotal'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>

                        </tr>

                    <?php } ?>
                </tbody>

                </thead>

            </table>

        </div>

        <div class="col-md-r">
            <a href="read_task.php" class="btn btn-info">Volver</a>

        </div>


    </div>

</div>
<div class="container p-4">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Costo total</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class="container p-4">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Subtotal</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class="container p-4">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Costo total</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>



<?php include("include/footer.php");  ?>
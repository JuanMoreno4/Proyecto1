<?php
include("db.php");
include("include/header.php");
?>

<div class="container p-4">

    <div class=col-md-5>
        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-<?= $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje']  ?>

            </div>
    </div>

<?php session_unset();
} ?>
</div>
<div class="container p-4">
    <div class="row">
        <div class="col-md-2">
            <a href="index.php" class="btn btn-info btn-block">Volver al menu</a>
        </div>
        <div class="col-md-10">
            <form action="">
                <div class="form-group">
                    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar paciente">
                    <input type="submit" class="btn btn-success " value="Buscar">
                </div>
            </form>

        </div>

    </div>

</div>

<div class="container p-4">
    <h2>LISTA DE TODOS LOS PACIENTES</h2> <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>No.</td>
                <td>Nombre del Paciente</td>
                <td>Número de Control</td>
                <td>Fecha de registro</td>
                <td>Número telefonico</td>
                <td>Edad</td>
                <td>Total del tratamiento</td>
                <td>Funciones</td>
            </tr>

        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM cliente";
            $resgistros = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($resgistros)) { ?>
                <tr>
                    <td><?php echo $row['id_cliente'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['numero_control'] ?></td>
                    <td><?php echo $row['fecha_alta'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['edad'] ?></td>
                    <td><?php echo $row['total_tratamiento'] ?></td>
                    <td>
                        <a href="edit_task.php?id=<?php echo $row['id_cliente'] ?>">Editar</a>
                        <br>
                        <a href="delete_task.php?id=<?php echo $row['id_cliente'] ?>">Eliminar</a>
                        <br>
                        <a href="pagos.php?idCliente=<?php echo $row['id_cliente'] ?>">Pagos</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>

    </table>



</div>


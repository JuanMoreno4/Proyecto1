<?php
include("db.php");
if(isset ($_GET['id'])){
    $id_Cliente = $_GET['id'];
    $query = "SELECT * FROM cliente WHERE id_cliente = $id_Cliente";
    $resultado1 = mysqli_query($conn, $query);
    if(mysqli_num_rows($resultado1) == 1){
        $row = mysqli_fetch_array($resultado1);
        $nombreC= $row['nombre'];
        $numeroC = $row['numero_control'];
        $fechaC = $row['fecha_alta'];
        $telefonoC = $row['telefono'];
        $edadC = $row['edad'];
        $totalTC = $row['total_tratamiento'];

    }


}

    if(isset($_POST['editar'])){
        $id_Cliente = $_GET['id'];
        $nombreC1 = $_POST['nombre'];
        $numeroC1 = $_POST['numeroC'];
        $fechaC1 = $_POST['fechaAlta'];
        $telefonoC1 = $_POST['telefono'];
        $edadC1 = $_POST['edad'];
        $totalTC1 = $_POST['totalT'];

        $query= "UPDATE cliente set nombre = '$nombreC1', numero_control ='$numeroC1', fecha_alta= '$fechaC1', telefono= '$telefonoC1', 
        edad= '$edadC1', total_tratamiento= $totalTC1 WHERE id_cliente = $id_Cliente";
        mysqli_query($conn, $query);
        $_SESSION['mensaje'] = "<br><h3>¡Registro actualizado!</h3>";
        $_SESSION['mensaje_tipo'] = 'info';
        header("Location:read_task.php");
        

       

    }

?>

<?php include("include/header.php"); ?>

<div class="container p-4">
    <h2>DATOS DEL PACIENTE</h2> 
     <br>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card card-body"> 
                <form action="edit_task.php?id=<?php echo $_GET['id']; ?>"  method="POST">
                    <div class="form-group">
                        <label for="">Nombre del paciente:</label>
                        <input type="text" name="nombre" value="<?php echo $nombreC;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input type="text" name="numeroC"  value="<?php echo $numeroC;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de registro:</label>
                        <input type="date" name="fechaAlta" value="<?php echo $fechaC;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Número telefonico:</label>
                        <input type="text" name="telefono" value="<?php echo $telefonoC;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input type="text" name="edad" value="<?php echo $edadC;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Precio del tratamiento:</label>
                        <input type="text" name="totalT" value="<?php echo $totalTC;?>" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-block" name ="editar" > Editar
                    </button>
                </form>

            </div>
        </div>
        <div class="col-md-5 mx-auto">
        <a href="read_task.php" class="btn btn-info"> Cancelar Actualización</a>
        </div>


    </div>

</div>



<?php include("include/footer.php");
?>
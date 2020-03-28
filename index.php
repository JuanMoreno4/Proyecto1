<?php
include("db.php");
?>
<?php
include("include/header.php");
?>



<div class="container p-4">
<br>
    <h2>AGREGAR NUEVO PACIENTE</h2> <br> <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <label for="">Nombre del paciente:</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input type="text" name="numeroC" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de registro:</label>
                        <input type="date" name="fechaAlta" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Número telefonico:</label>
                        <input type="text" name="telefono" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input type="text" name="edad" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Precio del tratamiento:</label>
                        <input type="text" name="totalT" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary btn-block" name="guardar" value="Guardar">
                    </div>
                </form>
            </div>


        </div>
        <div class="col-md-5">
            <a href="read_task.php" class="btn btn-success btn-block">Mostrar todos los Pacientes</a>
        </div>


    </div>

</div>

<?php
include("include/footer.php");
?>
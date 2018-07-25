<?php require_once PATH_APP . "/views/includes/header.php";  ?>

<div class="container">
    <a href="<?php echo PATH_URL; ?>/pages" class="btn btn-light"><i class="fa fa-backward"></i>Volver</a>
</div>

<div class="container">
    <div class="card card-body bg-light mt-5">
        <h2>Agregar Usuarios</h2>
        <form action="<?php echo PATH_URL; ?>/pages/add" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="clave">Password</label>
                <input type="text" name="clave" class="form-control form-control-lg">
            </div>
            <input type="submit" class="btn btn-success" value="Agregar Usuario">
        </form>
    </div>
</div>

<?php require_once PATH_APP . "/views/includes/footer.php";  ?>
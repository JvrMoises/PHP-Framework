<?php require_once PATH_APP . "/views/includes/header.php";  ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($data['users'] as $user) : ?>
            <tr>
                <td><?php echo $user->id; ?></td>
                <td><?php echo $user->nombre; ?></td>
                <td><?php echo $user->apellido; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><a href="<?php echo PATH_URL; ?>/pages/edit/<?php echo $user->id; ?>">Editar</a></td>
                <td><a href="<?php echo PATH_URL; ?>/pages/delete/<?php echo $user->id; ?>">Borrar</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once PATH_APP . "/views/includes/footer.php";  ?>

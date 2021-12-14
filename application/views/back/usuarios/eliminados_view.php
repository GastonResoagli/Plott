<?php if (!$usuarios) { ?>

<div class="container">
    <div class="well">
        <h1>No hay Eliminados</h1>
    </div>	
</div>

<?php } else { ?>

<div class="container">
    <div class="well">
        <h1>Todos los Usuarios Eliminados</h1>
    </div>	

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios->result() as $row){ ?>
            <tr>
                <td><?php echo $row->id;  ?></td>
                <td><?php echo $row->nombre;  ?></td>
                <td><?php echo $row->apellido;  ?></td>
                <td><?php echo $row->usuario;  ?></td>
                <td><?php echo $row->email;  ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>	            
</div>

<?php } ?>
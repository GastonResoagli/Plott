<?php if (!$usuarios) { ?>

<div class="container">
    <div class="well">
        <h1>No hay usuarios</h1>
    </div>
</div>

<?php } else { ?>

<div class="container">
    <div class="well">
        <h1>Todos los usuarios</h1>
    </div>	

    <?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	

    <br> <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios->result() as $row)
            { 
               ?>
                <tr>
                <td><?php echo $row->nombre;  ?></td>
                <td><?php echo $row->apellido;  ?></td>
                <td><?php echo $row->email;  ?></td>
                <td><?php echo $row->usuario;  ?></td>
                <td><a type="button" class="btn btn-danger" href="<?php echo base_url("usuarios_elimina/$row->id");?>">Eliminar</a>
            <?php } ?>
        </tbody>
    </table>	            
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<?php } ?>
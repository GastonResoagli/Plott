<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Todos los Productos</h1>
		</div>	
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
		<br> <br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row)
				{ 
					$imagen = $row->imagen;	?>
					<tr>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->precio;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><img height="80px" src="<?php echo $imagen; ?>"/></td>
					<td><a type="button" class="btn btn-success" href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a type="button" class="btn btn-danger" href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
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
	

<?php } ?>

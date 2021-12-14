<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Eliminados</h1>
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Todos los Eliminados</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->Tipo;  ?></td>
					<td><?php echo $row->precio;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a type="button" class="btn btn-warning" href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a type="button" class="btn btn-success" href="<?php echo base_url("productos_activa/$row->id");?>">Activar</a></td>
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
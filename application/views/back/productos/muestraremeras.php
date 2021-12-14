<link rel="stylesheet" href="<?php echo base_url('assets/css/remeras.css') ?>">


<div class="container">
<nav aria-label="breadcrumb justify-content-center">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="<?php echo base_url('todo');?>" class="text-secondary" >Inicio</a></li>
    <li class="breadcrumb-item active"><a href="<?php echo base_url('remera');?>"class="text-secondary" >Remeras</a></li>
    <li class="breadcrumb-item active "><a href="<?php echo base_url('gorra');?>" class="text-secondary">Gorras</a></li>
  </ol>
</nav>
</div>


<br>
<div class="container">
<div class="row">
 <?php foreach($productos->result() as $row) {?>
 
  <div class="text-center col-md-3">
      <div class="card" style="width: 14rem" >
          <img class="card-img" src="<?php echo $row->imagen;?>" alt="Card image cap" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $row->descripcion;  ?></h5>
          <p class="card-text">precio:<?php echo $row->precio;  ?></p>
          <p class="card-text">stock:<?php echo $row->stock;  ?></p>
          <p>
								<?php
								if (($row->stock > 0) && ($session_data = $this->session->userdata('logged_in'))) {

									// Envia los datos en forma de formulario para agregar al carrito
									echo form_open('carrito_agrega');
									echo form_hidden('id', $row->id);
									echo form_hidden('descripcion', $row->descripcion);
									echo form_hidden('precio', $row->precio);
									echo form_hidden('stock', $row->stock);
								?>
							<div>
								<?php
									$btn = array(
										'class' => 'btn btn-primary',
										'value' => 'Comprar',
										'name' => 'action'
									);

									echo form_submit($btn);
									echo form_close();
								?>
							</div>
						<?php


								} else {
								}
						?>
						</p>
          <br>
        </div>
      </div>
      <br>
    </div>
 
 
 
 <?php } ?>

</div>
</div>







<!-- ---------------------------------- GRID --------------------------->
<div class="conteiner colorF">
<div class="row">
<div class="col-md-1"></div> <!-- COLUMNA IZDA.GRID -->
<div class="col"> <!-- COLUMNA CENTRAL GRID -->
<div class="row">
<div class="col-md-12">


<!-- Card que contieneal Formulario -->
<div class="card-sectionmx-auto mb-3 mt-3 border-rounded" style="width: 35rem;">
<div class="cardheader">
<h2class="tit">Registrarse:</h2>
</div>
<div class="cardbody">
<?php echo validation_errors(); ?>

<!--Formulario -->
<div
class="well bs-component form-horizontal">
<?php echo form_open('verifico_nuevoregistro',['class' => 'form-group','role' => 'form','id' => 'form_registro']); ?>
<fieldset>
<div class="form-group">
<label class="control-label fuente">Nombre:</label>
<div>
<?php echo form_input(['name' => 'nombre','id' => 'nombre','class' => 'form-control fuentePlaceholder','placeholder' => 'Nombre','required'=>'required','autofocus'=>'autofocus','value'=>set_value('nombre')]); ?>
</div>
</div>
<div class="form-group">
<label class="control-label fuente">Apellido:</label>
<div>
<?php echo form_input(['name' => 'apellido','id' => 'apellido','class' => 'form-control fuentePlaceholder','placeholder' => 'Apellido','required'=>'required','value'=>set_value('apellido')]); ?>
</div>
</div>
<div class="form-group">
<label class="control-label fuente">Email:</label>
<div>
<?php echo form_input(['type'=>'email','name' => 'email','id' => 'email','class' => 'form-control fuentePlaceholder','placeholder' => 'Email','required'=>'required','value'=>set_value('email')]); ?>
</div>
</div>
<div class="form-group">
<label class="control-label fuente">Nombre de Usuario:</label>
<div>
<?php echo form_input(['name' => 'usuario','id' => 'usuario','class' => 'form-control fuentePlaceholder','placeholder' => 'Usuario','required'=>'required','value'=>set_value('usuario')]); ?>
</div>
</div>
<div class="form-group">
<label class="control-label fuente">Contraseña:</label>
<div>
<?php echo form_password(['name' => 'pass','id' => 'pass','class' => 'form-control fuentePlaceholder','placeholder' => 'Contraseña','required'=>'required']); ?>
</div>
</div>
<div class="form-group">
<label class="control-label fuente">Repetir Contraseña:</label>
<div>
<?php echo form_password(['name' => 're_pass','id' => 're_pass','class' => 'form-control fuentePlaceholder','placeholder' => 'Repetir Contraseña','required'=>'required']); ?>
</div>
</div>
<div>
<?php echo form_submit('submit', 'Registrarse',"class='btn btn-primary fuenteBotones' mt-3");?> <br><br>

<?php echo form_close(); ?>
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
</div>
</fieldset>
</div>
<!-- FínFormulario -->
</div>
</div>
<!-- Fin Card quecontiene al Formulario -->
</div>
</div>
</div> <!-- FIN DE COLUMNA CENTRAL GRID -->
<div class="col-md-1"></div> <!-- COLUMNA DCHA.GRID -->
</div>
</div>
<!-- ---------------------------------- FIN GRID --------------------------------------------------- -->
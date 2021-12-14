<!-- ---------------------------------- GRID ------------------------------------------------------- -->
				<div class="conteiner colorF">
					<div class="row">
						<div class="col-md-1"></div> <!-- COLUMNA IZDA. GRID -->

						<div class="col"> <!-- COLUMNA CENTRAL GRID -->
							<div class="row">
								<div class="col-md-12"> 
									
									<!-- Card que contiene al Formulario -->
									<div class="card-section mx-auto mb-3 mt-3 border-rounded" style="width: 35rem;">
									  <div class="card-header">
									      <h2 class="tit">Ingresar:</h2>
									  </div>

									  <div class="card-body">

										  	<?php echo validation_errors(); ?>

										  	<!-- Formulario de Login -->
										  	  
										  	<div>
										  	    <?php echo form_open('verifico_usuario', 
										  	              			 ['class' => 'form-signin', 'role' => 'form']); ?>
											  	    
											  	    <div class="form-group">
											  	      <label class="control-label fuente">Nombre de Usuario:</label>
											  	      <div>
											  	            <?php echo form_input(['name' => 'usuario', 
														  	                       'id' => 'usuario', 
														  	                       'class' => 'form-control fuentePlaceholder',
														  	                       'placeholder' => 'Usuario', 
														  	                       'required'=>'required',
														  	                       'autofocus'=>'autofocus']); ?>
											  	      </div>
											  	    </div>

											  	    <div class="form-group">
											  	      <label class="control-label fuente">Contraseña:</label>
											  	      <div>
											  	            <?php echo form_password(['type' => 'password',
															  	            		  'name' => 'pass', 
															  	                      'id' => 'pass', 
															  	                      'class' => 'form-control fuentePlaceholder',
															  	                      'placeholder' => 'Contraseña', 
															  	                      'required'=>'required']); ?>
											  	      </div>
											  	    </div>

											  	    
											  	      <?php echo form_submit('submit', 'Ingresar',"class='btn btn-secondary fuenteBotones' "); ?> 
											  	      
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
	<br>
	<br>
	<br>
	<br>
	<br>
	
										    </div>
										    <!-- Fín Formulario de Login -->

									  </div> 
									</div>
									<!-- Fin Card que contiene al Formulario -->
									
								</div>
							</div>

						</div>	<!-- FIN DE COLUMNA CENTRAL GRID -->
						
						<div class="col-md-1"></div> <!-- COLUMNA DCHA. GRID -->

					</div>	
				</div>
<!-- -------------------------------- FIN GRID --------------------------------------------------- -->



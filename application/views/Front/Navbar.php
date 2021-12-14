  
<!--Menu admin !-->
<?php if (($this->session->userdata('logged_in')) and ($perfil_id == '1')) { ?>

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
  <div>
  <a class="navbar-brand" href="<?php echo base_url('Welcome');?>"></a> 
  <img src="assets/img/logo.png" width="60" height="60" alt="">
</div>
<br>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Welcome');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Nosotros');?>">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Comercio');?>">Comercialización</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('consultas');?>">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('todo');?>">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Terminos');?>">Terminos y Condiciones</a>
      </li>
    </ul>
    <nav class="nav-item dropdown ml-auto">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
      Administrador <?= $nombre ?><span class="caret"></span>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo base_url('muestraproducto'); ?>">Productos</a>
        <a class="dropdown-item" href="<?php echo base_url('usuarios'); ?>">Panel de Usuarios</a>
        <a class="dropdown-item" href="<?php echo base_url('panel_consulta'); ?>">Panel de Consultas</a>
        <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Salir</a>
      </div>
    </nav>
</nav>



<!--menu usuario !-->


<?php } else if (($this->session->userdata('logged_in')) and ($perfil_id == '2')) { ?>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
  <div>
  <a class="navbar-brand" href="<?php echo base_url('Welcome');?>"></a> 
  <img src="assets/img/logo.png" width="60" height="60" alt="">
</div>
<br>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Welcome');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Nosotros');?>">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Comercio');?>">Comercialización</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('consultas');?>">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('todo');?>">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Terminos');?>">Terminos y Condiciones</a>
      </li>
    </ul>
    <nav class="nav-item dropdown ml-auto">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
      Bienvenido <?= $nombre ?><span class="caret"></span>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Salir</a>
      </div>
    </nav>
</nav>

<?php }  else { ?>


  <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
  <div>
  <a class="navbar-brand" href="<?php echo base_url('Welcome');?>"></a> 
  <img src="assets/img/logo.png" width="60" height="60" alt="">
</div>
<br>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Welcome');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Nosotros');?>">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Comercio');?>">Comercialización</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('consultas');?>">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Terminos');?>">Terminos y Condiciones</a>
      </li>
    </ul>
    <ul class="nav navbar-nav  ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login ');?>">Iniciar sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('registro');?>">Registrarte</a>
      </li>
  </div>
</nav>

<?php }


        
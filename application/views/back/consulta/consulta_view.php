<?php if (!$consultas) { ?>

<div class="container">
    <div class="well">
        <h1>No hay consultas</h1>
    </div>
</div>

<?php } else { ?>

<div class="container">
    <div class="well">
        <h1>Todas las Consultas</h1>
    </div>	

    <br> <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($consultas->result() as $row)
            { 
               ?>
                <tr>
                <td><?php echo $row->nombre;  ?></td>
                <td><?php echo $row->email;  ?></td>
                <td><?php echo $row->mensaje;  ?></td>
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
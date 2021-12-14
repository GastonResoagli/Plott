<body>
  <section class="container">
    <h3 class="text-center mt-4 text-uppercase font-weight-bold font-italic">Confirmar Compra</h3>
    <br>
    <p class="mb-4 ml-3 mr-2 text-center" style="color:white">
      Verifique sus productos:
    </p>

    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-hover table-sm table-bordered table-dark">
          <thead>
            <tr>
              <th class="bg-info" colspan="3">Datos del Comprador</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Nombre</th>
              <td><?php echo $nombre;  ?></td>
            </tr>

            <tr>
              <th>Apellido</th>
              <td><?php echo $apellido;  ?></td>
            </tr>

            <tr>
              <th>Correo</th>
              <td><?php echo $email;  ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-hover table-sm table-bordered table-dark">

          <?php // Todos los items de carrito en "$cart". 
          if ($cart = $this->cart->contents()) : //Esta función devuelve un array de los elementos agregados en el carro

          ?>
            <thead>
              <th class="bg-info" colspan="4">Detalles de Compra</th>
            </thead>
            <tr class="bg-primary">
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
            </tr>

            <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
            echo form_open('carrito_actualiza');
            foreach ($cart as $item) :
              echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
              echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
              echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
              echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
              echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
              <tr>
                <td>
                  <?php echo $item['name']; ?>
                </td>
                <td>
                  $ <?php echo number_format($item['price'], 2); ?>
                </td>
                <td>
                  <?php echo $item['qty']; ?>
                </td>

                <td>
                  $ <?php echo number_format($item['subtotal'], 2) ?>
                </td>
              </tr>
            <?php
            endforeach;
            ?>
            <tr>
              <?php {
                $total = $this->cart->total();
              ?>
            <tr>
              <th class="bg-primary">Total</th>
              <td colspan="3">
                $<?php echo number_format($total, 2);  ?>
              </td>
            </tr>
          <?php } ?>
          </tr>
        <?php echo form_close();
          endif; ?>
        </table>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row">
      <div class="col-6"></div>
      <div class="col-4">
        <a type="button" class="btn btn-danger ml-5" href="<?php echo base_url(""); ?>">Atras</a>
        <a type="button" class="btn btn-success ml-2" href="<?php echo base_url("confirma_compra"); ?>">Finalizar Compra</a>
      </div>
      <div class="col-2"></div>
    </div>
  </section>

  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
</body>
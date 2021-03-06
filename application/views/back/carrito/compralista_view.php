<div class="container-fluid" id="carrito" style="color: black">
  <div class="cart">
    <div class="heading">
      <h2 id="h2" align="center" >SU COMPRA SE HA PROCESADO CON EXITO.</h2>
      <p>
        Sus productos se detallan acontinuacion:
      </p>
    </div>
    <br><br>
    <div class="text" align="center">

      <?php $cart_check = $this->cart->contents();
      // Si el carrito está vacio, mostrar el siguiente mensaje
      if (empty($cart_check)) {
        echo 'Su carrito se encuentra vacio, para agregar productos haga click en "Comprar"';
      }
      ?>
    </div>

    <table class="table table-dark" border="0" cellpadding="5px" cellspacing="1px">

      <?php // Todos los items de carrito en "$cart". 
      if ($cart = $this->cart->contents()) : //Esta función devuelve un array de los elementos agregados en el carro

      ?>
        <tr id="main_heading">
          <td>ID</td>
          <td>Descripcion</td>
          <td>Precio</td>
          <td>Cantidad</td>
          <td>Total</td>
        </tr>

        <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
        echo form_open('carrito_actualiza');
        $gran_total = 0;
        $i = 1;
        $todos = 0;

        foreach ($cart as $item) :
          echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
          echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
          echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
          echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
          echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
        ?>
          <tr>
            <td>
              <?php echo $i++; ?>
            </td>
            <td>
              <?php echo $item['name']; ?>
            </td>
            <td>
              $ <?php echo number_format($item['price'], 2); ?>
            </td>
            <td>
              <?php echo form_input(
                'cart[' . $item['id'] . '][qty]',
                $item['qty'],
                'maxlength="3" size="1" style="text-align: right"'
              ); ?>
            </td>
            <?php $gran_total = $gran_total + $item['subtotal']; ?>
            <td>
              $ <?php echo number_format($item['subtotal'], 2) ?>
            </td>
          </tr>
        <?php
        endforeach;
        ?>

        <tr>
          <td>
            <b>Total: $
              <?php //Gran Total
              echo number_format($gran_total, 2);
              ?>
            </b>
          </td>
        </tr>
      <?php echo form_close();
      endif; ?>
      <br>
  </div>
  <form action="Welcome" method="POST" class="form_contact">
    <div class="botones" align="center">
    </div>
  </form>
  <br>
  </table>
</div>
</div>
<br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br><br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
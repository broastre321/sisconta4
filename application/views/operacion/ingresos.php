<!--(se realizaron cambios NESesario Hacer cambios)-->
<?php

//Info devulve FALSO si no hay datos
if (!isset($info)) { $info = FALSE; }



$cod_producto = array(
    'id'      => 'inputCodProducto',
    'name'      => 'cod_producto',
    'maxlength'   => '20',
    'class'     => 'form-control input-sm',
    'type'      => 'number',
    'value'     => ($info) ? $info->cod_producto:"",
    'required'    => 'required',
    'placeholder' => '############'
);


$nombre_producto = array(
    'id'      => 'inputNombreProducto',
    'name'      => 'nombre_producto',
    'class'     => 'form-control input-sm',
    'type'      => 'text',
    'value'     => ($info) ? $info->nombre_producto:"",
    'required'    => 'required'
);

$precio = array(
    'id'      => 'inputPrecio',
    'name'      => 'precio',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->precio:"",
    'type'      => 'text',
    'required'    => 'required'
);


$categoria = array(
    'id'      => 'inputCategoria',
    'name'      => 'categoria',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->categoria:"",
    'required'    => 'required'


);


$stock = array(
    'id'      => 'inputStock',
    'name'      => 'stock',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->stock:"",
    'type'      => 'number'

);



$enviar = array(
    'name'      => 'enviar',
    'class'     => 'templatemo-blue-button',
    'type'      => 'submit',
    'content'   => 'Guardar'
);

$reset = array(
    'class'     => 'templatemo-white-button',
    'type'      => 'reset',
    'content'   => 'Vaciar'
);

?>
  <!-- contents -->
  <div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
      <h1 class="margin-bottom-10">Ficha de INGRESOS</h1>
      <h2> <p>Registro INGRESO</p> </h2>
<?php echo form_open(); ?>
        <div class="row form-group">
          
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputNombreProducto">Nombre</label>
              <div class="fg-line">
                  <?php echo form_input($nombre_producto);?>
                </div>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputCodProducto"><!--Codigo-->Monto en Bolivianos</label>
              <div class="fg-line">
                  <?php echo form_input($cod_producto);?>
                </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputPrecio"><!--Precio-->Monto</label>

              <div class="fg-line">
                  <?php echo form_input($precio);?>  <!--   (cambiar precio nombre de columna y cambiar el valor Int) --> 
                </div>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputCategoria"><!--Categoria-->Tipo de INGRESO</label> <!--cambiar la nombre de la columna en la tabla-->

              <select class="form-control" name="categoria" id="categoria" class="form-control1">
                <option>Donativo</option>
                <option>Matricula</option>
                <option>Beca</option>
                
              </select>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputForma"><!--Categoria-->forma de pago</label><!--falta realizar columna en tabla-->

              <select class="form-control" name="categoria" id="categoria" class="form-control1">
                <option>Cheque</option>
                <option>Efectivo</option>
                
              </select>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputForma"><!--Categoria-->Cuenta a registrar</label><!--falta realizar columna en tabla-->

              <select class="form-control" name="categoria" id="categoria" class="form-control1">
                <option>CAJA</option>
                <option>BANCO</option>
                
              </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-12 has-success form-group">
              <label cfor="inputStock">DETALLE</label>

              <div class="fg-line">
                  <?php echo form_input($stock);?>
                </div>
          </div>
        </div>

      </div>
  </div>
<center>
          <?php echo form_button($enviar); ?>
          <?php echo form_button($reset); ?>
</center>
        <?php echo form_close(); ?>
      </div>
    </div>
    <!-- fin de agregar clientes -->
  </div>
  </body>
</html>

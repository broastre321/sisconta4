<?php

//Info devulve FALSO si no hay datos
if (!isset($info)) { $info = FALSE; }


                                                                               //ESTA ES LA FECHA AÑADIDO
$cod_producto = array(
    'id'      => 'inputCodProducto',
    'name'      => 'cod_producto',
    'maxlength'   => '20',
    'class'     => 'form-control input-sm',
    'type'      => 'number',
    'value'     => ($info) ? $info->cod_producto:"",
    'required'    => 'required',
    'placeholder' => '####/##/##'
);
?>
<div class="table-responsive">
   <table class="table table-bordered table-hover table-striped">



   </table>



   <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <div class="col-lg-6 col-md-6 form-group">
              <label for="inputCodProducto"><!--Codigo-->LIBRO DIARIO EN FECHAS</label>
              <div class="fg-line">
                  <?php echo form_input($cod_producto);?>
                </div>
          </div>
              <table class="table table-striped table-bordered templatemo-user-table">
                  <caption><!--Lista de Productos-->LIBRO DIARIO</caption>
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by"><!--CODIGO-->NRO <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by"><!--NOMBRE-->INGRESO<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">CONCEPTO <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">ORIGEN <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">DESTINO<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">EGRESO<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TRANSEFERENCIA<span class="caret"></span></a></td>

                    <td>Action</td>

                  </tr>
                </thead>
                <tbody>
                <?php
          		if ($data_get == NULL) {
          		?>
          		<div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
          		<?php
          		} else {
          		foreach ($data_get as $row) {
          		?>
                  <tr>
                    <<td><!--<?php echo $row->cod_producto; ?>--></td>
                    <td><!--<!--<?php echo $row->nombre_producto; ?>--></td>
                    <td><!--<?php echo $row->precio; ?>--></td>
                    <td><!--<?php echo $row->categoria; ?>--></td>
                    <td></td>
                    <td></td>
                    <td><!--<?php echo $row->stock; ?>--></td>
                    <td>
                    	<a href="<?php echo site_url('Productos/edit/' . $row->cod_producto); ?>" class="btn btn-warning "><span class="fa fa-wrench nav_icon "></span></a>
                    	<a href="<?php echo site_url('Productos/delete/' . $row->cod_producto); ?>" class="btn btn-danger"><span class="fa fa-times-circle nav_icon "></span></a>
                    </td>
              		<?php
              		}
          		}
              		?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
</div>

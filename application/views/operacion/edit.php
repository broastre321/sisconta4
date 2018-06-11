<?php echo form_open('Productos/update', 'role="form"'); ?>

<div class="templatemo-content-container">
  <div class="templatemo-content-widget white-bg">
    <h1 class="margin-bottom-10">EDITAR PRODUCTO</h1>
    <h2> <p>Editar Producto</p> </h2>

      <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">
            <label for="nombre_producto">Nombre</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo $nombre_producto ?>">

        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputNombreProducto">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $precio ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputStock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $stock ?>">
        </div>
      </div>
      <div class="row form-group">

        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputCategoria">Categoria</label>

            <select class="form-control" name="categoria" id="categoria" value="<?php echo $categoria ?>">
              <option>LAVADORA</option>
              <option>REFRIGERADOR</option>
              <option>MICROONDAS</option>
              <option>COCINA</option>
            </select>
        </div>
      </div>
    </div>
      <input type="hidden" name="cod_producto" value="<?php echo $cod_producto ?>" />

<center>
<input type="submit" name="mit" class="btn btn-primary" value="Actualizar">
<button type="button" onclick="location.href='<?php echo site_url('Productos') ?>'" class="btn btn-success">Cancelar</button>
</center>
</form>
</div>
<?php echo form_close(); ?>

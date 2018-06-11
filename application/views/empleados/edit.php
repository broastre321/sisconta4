<?php echo form_open('Empleados/update', 'role="form"'); ?>

<head>
    <!--(headerrrrr)-->
     <meta charset="utf-8">
    
    <link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/templatemo-style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.2.min.js"></script> 

    
    
    
    
        <!--(headerrrrr)-->
     <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    
    
    
</head>    

<body>
<div id="page-wrapper">
<div class="templatemo-content-container">
  <div class="templatemo-content-widget white-bg">
    <h1 class="margin-bottom-10">Editar Empleados</h1>
    <h2> <p>Editar Empleados</p> </h2>

      <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">
            <label for="nombre_producto">Nombre</label>
            <input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" value="<?php echo $nombre_empleado ?>">

        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputNombreProducto">Apellido</label>
            <input type="text" class="form-control" id="apellido_empleado" name="apellido_empleado" value="<?php echo $apellido_empleado ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputStock">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="nombre_producto">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion ?>">

        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputNombreProducto">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputStock">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputNombreProducto">Ci_garante</label>
            <input type="number" class="form-control" id="ci_gar" name="ci_gar" value="<?php echo $ci_gar ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputStock">Garante</label>
            <input type="text" class="form-control" id="garante" name="garante" value="<?php echo $garante ?>">
        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="nombre_producto">Telefono Garante</label>
            <input type="number" class="form-control" id="tef_gar" name="tef_gar" value="<?php echo $tef_gar ?>">

        </div>
        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputNombreProducto">Direccion Garante</label>
            <input type="te" class="form-control" id="dir_gar" name="dir_gar" value="<?php echo $dir_gar ?>">
        </div>
      </div>
      <div class="row form-group">

        <div class="col-lg-6 col-md-6 form-group">
            <label for="inputCategoria">Tipo</label>

            <select class="form-control" name="tipo" id="tipo" value="<?php echo $tipo ?>">
              <option>Administrador</option>
              <option>Empleado</option>
            </select>
        </div>

      </div>


    </div>
    

<center>
<input type="submit" name="mit" class="btn btn-primary" value="Actualizar">
<button type="button" onclick="location.href='<?php echo site_url('Empleados') ?>'" class="btn btn-success">Cancelar</button>
</center>
</form>
</div
    </div>

    
         <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="../vendor/metisMenu/metisMenu.min.js"></script>
                <script src="../dist/js/sb-admin-2.js"></script>
    
</body>


<?php echo form_close(); ?>

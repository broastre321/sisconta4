
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/autocomplete/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/autocomplete/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/autocomplete/jquery.validate.js"></script>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
      <h1 class="margin-bottom-10">Agregar Clientes</h1>


      <h2> <p>Registre al Cliente Nuevo</p> </h2>

      <?php if($custom_error == TRUE) { ?>
              <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>ALERTA!</strong> no se llenaron bien los datos
              </div>
      <?php } ?>
      
      <form class="templatemo-login-form" action="<?php echo base_url(); ?>agregarcliente" method="POST">
        
        <div class="row form-group">
          
          <div class="col-lg-6 col-md-6 form-group">                  
            <label for="inputFirstName">NITCI : </label>
            <input type="text" class="form-control" name="nitci" id="nitci" placeholder="Ingrese el nit o carnet">              
          </div>
          <div class="col-lg-6 col-md-6 form-group">                  
            <label for="inputFirstName">Apellido / Nombre : </label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese el nit o carnet">              
          </div>
        </div>

        <div class="clearfix"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="btnContinuar">Agregar</button>
            <a href="<?php echo base_url(); ?>admin" class="btn btn-danger">Salir</a>
              
        </div>

      </form>

      </div>
  </div>


  <!-- Button trigger modal -->



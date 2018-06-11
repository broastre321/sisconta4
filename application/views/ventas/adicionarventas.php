
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/autocomplete/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/autocomplete/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/autocomplete/jquery.validate.js"></script>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
      <h1 class="margin-bottom-10">Datos de la Factura</h1>
      <h2> <p>Nit o Carnet Para la Factura</p> </h2>


      <?php if ($custom_error == TRUE) { ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>¡ERROR!</strong> Ingrese bien los datos
          </div>
      <?php } ?>


      <?php foreach ($sucursal as $key ) {
              $key->nit_sucursal;
              $key->llave_dosificacion;
              $key->numero_autorizacion;
              $key->direccion;
              $key->telefono;

      } ?>

      <!--<form class="templatemo-login-form" action="<?php echo current_url(); ?>" method="POST">-->
        
        <div class="row form-group">
          
          <div class="col-lg-6 col-md-6 form-group">                  
            <label for="inputFirstName">NITCI : </label>
            <input type="text" class="form-control" name="nitci" id="nitci" placeholder="Ingrese el nit o carnet">  
            <input type="hidden" class="form-control" name="nitci_id" id="nitci_id">              
          </div>
        </div>

        <div class="clearfix"></div>
        <div class="form-group">
      
            <button type="submit" class="btn btn-primary" id="btnContinuar" >Continuar</button>
            <a href="<?php echo base_url(); ?>admin" class="btn btn-danger">Salir</a>
            <a href="<?php echo base_url(); ?>agregarcliente" class="btn btn-warning">Registrar</a>
        </div>

                   <!--<div class="col-md-6 form-group">
              <label class="control-label"><h4>Nro Autorizacion: <?php echo $key->numero_autorizacion; ?> </h4> </label>
              <input type="text" name="autorizacion" placeholder= "<?php echo $key->numero_autorizacion; ?>" readonly="">

            </div>-->

        <div class="col-md-4 form-group">
            <label class="control-label"><h4>Fecha: <?php echo $a = date('d/m/Y '); ?></h4></label>
            <input type="hidden" name="fecha" id="fecha" value="<?php $factura=date('Y/m/d') ?>"/>
        </div>

        </form>
        </div>




  </div>


<script type="text/javascript">
$(document).ready(function(){

      $("#nitci").autocomplete({
            source: "<?php echo base_url(); ?>Agregarventa/AutocompleteNitci",
            minLength: 1,

            select: function( event, ui ) {
                 $("#nitci_id").val(ui.item.id);
            }
      });
      
     

});

</script>


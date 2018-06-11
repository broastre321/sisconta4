
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url() ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<!-- CUERPO********************************************************************************* -->
<body>
        
    <div id="page-wrapper">
            <!-- /.navbar-top-links -->
   
            
              <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center> <h1> FICHA TRANSFERENCIAS </h2> </center>
                        </div>
                        
                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form" action="<?php echo base_url(); ?>transferencias/registrar" method="POST">
                                        
                                        
                                        <div class="form-group">
                                            <label>Motivo </label>
                                            <input class="form-control" name="motivo"  placeholder="Ingrese el motivo de la transferencia">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Monto </label>
                                            <input class="form-control" name="monto" placeholder="Ingrese monto en Bs">
                                        </div>
                                        
              
                                        
                                        
                                        <div class="form-group">
                                            <label>fecha </label>
                                           <input type="date" name="fecha" class="span12" /><i class="fa fa-table fa-fw"></i>
                                        </div>    
                                        
                                        
     <!-- BOTONES------------------------------------------------------- -->
                                        
                                   
                                    
                                </div>
                                
                                
     <!-- /.col-lg-6 (nested) COLUMNA DERECHA------------------------------------------------------- -->
                                <div class="col-lg-6">
                                    
                                   
                                
                                    <!-- para  boton radio  dos division que se identificacion con un mismo NAME -->
                                  <div class="radio" >
                                    <label><input type="radio" name="tipo_tesoreria" value="BANCO" >Sale de caja y entra a banco</label>
                                  </div>
                                    
                                  <div class="radio">
                                    <label><input type="radio" name="tipo_tesoreria" value="CAJA" >Sale de banco y entra  caja</label>
                                  </div>

                                  
                                 
                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <button type="submit" class="btn btn-default">Registrar</button>
                                        <button type="reset" class="btn btn-default">Limpiar campos</button>

                                           </form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

 

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets2/dist/js/sb-admin-2.js"></script>

</body>

</html>

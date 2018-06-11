<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets2/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Calendari********************************************************************************* -->
</head>
<!-- CUERPO********************************************************************************* -->
<body>


   <div id="page-wrapper">

              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                                <div class="panel-heading">
                                    <h4><?php echo $this->session->flashdata('error'); ?></h4>
                                    <center> <h1> FICHA INGRESOS </h2> </center>
                                </div>
                            
                        <div class="panel-body">

                        <form role="form" action="<?php echo base_url(); ?>ingresos/registrar" method="POST">
                            <div class="row">
                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Emitido por </label>
                                            <input class="form-control" name="cliente" placeholder="Ingrese el nombre y apellido">
                                        </div>
                                    
                                       <div class="form-group">
                                            <label> Carnet de Identidad </label>
                                            <input class="form-control" name="carnet" placeholder="Ingrese su  CI">
                                        </div>

                                        <div class="form-group">
                                            <label>Monto </label>
                                            <input class="form-control" name="monto" placeholder="Ingrese monto en Bs">
                                        </div>
                                    
                       
                                    

                                         <div class="form-group">
                                            <label>fecha </label>
                                            <input type="date" name="fecha" class="span12" /><i class="fa fa-table fa-fw"></i>

                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Detalle</label>
                                                    <textarea class="form-control" name="detalle" rows="8" >
                                                    </textarea>
                                        </div>
     <!-- BOTONES -->

                                </div>

     <!-- /.col-lg-6 (nested) COLUMNA DERECHA -->
                                <div class="col-lg-6">
                                        <?php //print_r($cuentas) ?>
                                    <div class="form-group">
                                        
                                        
                                            <label>Elija tipo de ingreso</label>
                                            <select class="form-control" name="tipo_ingreso">
                                                <?php foreach ($arraydecontrolador as $cuenta)
                                                    {
                                                    echo '<option value='.$cuenta->codigo.'>'.$cuenta->codigo.'-'.$cuenta->nombre.'</option>';
                                                    }
                                                ?>
                                            </select>
                                    </div>

                                     <div class="form-group">
                                            <label>Forma de pago</label>
                                            <select class="form-control" name="forma_pago">
                                                <option value="cheque">Cheque</option>
                                                <option value="efectivo">Efectivo</option>

                                            </select>
                                    </div>
                                    <!--
                                    
                                    <h1>Cuenta a registrar</h1>
                                     <div class="form-group has-warning">

                                            <select class="form-control" name="tipo_cuenta">
                                                <option value="caja">Caja</option>
                                               

                                            </select>
                                    </div> 
                                    
                                    -->


                                    <h1>Tipo de documento</h1>
                                    <div class="form-group has-warning">
                                            <select class="form-control" name="tipo_documento">
                                                <option value="recibo">Recibo</option>
                                                <option value="factura">Factura</option>
                                            </select>
                                    </div>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <button type="submit" class="btn btn-default" name="enviar">Registro</button>
                            <button type="reset" class="btn btn-default">Limpiar campos</button> <!-- /.row (nested) -->
                        </form>
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
    <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/dist/js/sb-admin-2.js"></script>

</body>

</html>




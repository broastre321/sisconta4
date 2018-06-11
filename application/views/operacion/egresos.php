
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
            <!-- /.navbar-top-links -->


              <div class="row">
                <div class="col-lg-12">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center> <h1> FICHA EGRESOS </h2> </center>
                        </div>

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6">
                                   <form role="form" action="<?php echo base_url(); ?>Egresos/registrar" method="POST">


                                        <div class="form-group">
                                            <label>Emitido a </label>
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
                                            <input type="date" name="fecha" class="span12"  /><i class="fa fa-table fa-fw"></i>
                                        </div>

                                        <div class="form-group">
                                            <label>Detalle</label>
                                                    <textarea class="form-control" name="detalle" rows="8" >
                                                    </textarea>
                                        </div>
     <!-- BOTONES------------------------------------------------------- -->



                                </div>


     <!-- /.col-lg-6 (nested) COLUMNA DERECHA------------------------------------------------------- -->
                                <div class="col-lg-6">

                                    <div class="form-group">
                                            <label>Elija tipo de Egreso</label>
                                            <select class="form-control" name="tipo_egreso">
                                                  <?php foreach ($arraydecontrolador as $cuenta){
                                                    echo '<option value='.$cuenta->codigo.'>'.$cuenta->codigo.'-'.$cuenta->nombre.'</option>';
                                                    }
                                                ?>
                                            </select>
                                    </div>

                                     <div class="form-group">
                                            <label>Forma de pago</label>
                                            <select class="form-control" name="forma_pago">
                                                <option value="CHEQUE">Cheque</option>
                                                <option value="EFECTIVO">Efectivo</option>

                                            </select>
                                    </div>
                                    <h1>Cuenta a registrar</h1>
                                     <div class="form-group has-warning">

                                            <select class="form-control" name="tipo_cuenta">
                                                <option value="CAJA">Caja</option>
                                                <option value="BANCO">Banco</option>

                                            </select>
                                    </div>


                                    <h1>Tipo de documento</h1>
                                    <div class="form-group has-warning">

                                            <select class="form-control" name="tipo_documento">
                                                <option value="RECIBO">Recibo</option>
                                                <option value="FACTURA">Factura</option>

                                            </select>
                                    </div>


                                </div>

                              <!-- /.col-lg-6 (nested) -->
                            </div>
                             <button type="submit" class="btn btn-default">Registro</button>
                                        <button type="reset" class="btn btn-default">Limpiar campos</button>

                   </form>

                     <form role="form" action="<?php echo base_url(); ?>imprimir" method="POST">
                                      <button type="submit"  value="Emitir" class="btn btn-default">Emitir comprobante</button>
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

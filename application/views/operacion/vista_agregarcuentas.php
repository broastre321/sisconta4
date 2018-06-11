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
                                        <h4><?php echo $this->session->flashdata('error'); ?></h4>
                                        <center> <h1> Agregar cuentas </h2> </center>
                                    </div>

                        <div class="panel-body">

                            <form role="form" action="<?php echo base_url(); ?>Agregarcuentas/registrar" method="POST">
                                 <div class="row">
                                      <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Codigo </label>
                                            <input class="form-control" name="codigo" placeholder="Ingrese el codigo de cuenta">
                                        </div>

                                        <div class="form-group">
                                            <label>Nombre de la cuenta </label>
                                            <input class="form-control" name="nombre" placeholder="Ingrese nombre de la cuenta">
                                        </div>  <!-- BOTONES -->
                                        
                                        <div class="form-group">
                                            <label>Fecha </label>
                                            <input type="date" name="fecha" class="span12" /><i class="fa fa-table fa-fw"></i> 
                                        </div>
                                        
                                      </div>

     <!-- /.col-lg-6 (nested) COLUMNA DERECHA -->
                                <div class="col-lg-6">

                                    <h1>Tipo de cuenta </h1>
                                    <div class="form-group has-warning">
                                            <select class="form-control" name="tipo_cuentas">
                                                <option value="1">ingreso</option>
                                                <option value="2">egreso</option>
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




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets2/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets2/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">¿Que operacion desea realizar?</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-4 col-md-6">
                 <div class="panel panel-primary">
                           <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                      <div class="huge">Ingresos</div>
                                    </div>
                                </div>
                            </div>
                        <a href="<?php echo base_url(); ?>Ingresos">
                            <div class="panel-footer">
                                    <span class="pull-left">Ver Ficha</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                             </div>
                       </a>
                 </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-9 text-right">
                          <div class="huge">Egresos</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>Egresos">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Ficha</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

         <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-9 text-right">
                          <div class="huge">Transferencias</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>Transferencias">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Ficha</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      
    </div>

    
    
    
    
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="assets2/vendor/raphael/raphael.min.js"></script>
    <script src="assets2/vendor/morrisjs/morris.min.js"></script>
    <script src="assets2/data/morris-data.js"></script>
    <script src="assets2/dist/js/sb-admin-2.js"></script>

  </div>


</body>

</html>

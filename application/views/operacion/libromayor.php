<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
                  <title>Reportes</title>
        <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="assets2/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

<body>
        <!-- MENU -->
  <!-- /.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->
        <div id="page-wrapper">
             <div class="row">
     <form role="form" action="<?php echo base_url(); ?>libromayor" method="POST"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                         <div class="panel-heading">
                                                    <h1><label>Libro mayor </label></h1>    
                         </div>
                        <div class="panel-body">
                           <div class="row"> <!--Columna izquierda -->
                               
                            
        <div class="col-lg-4"> <!-- COLUMNA 1-->
          <div class="form-group">
        
                            <div class="form-group">
                                                <label>Cuenta a mostrar</label>
                                                <select class="form-control" name="tipo">
                                                    <option value="ingresos">Ingreso</option>
                                                    <option value="egresos">Egreso</option>
                                                </select>
                            </div>
          </div>
        </div>
                               
                               
       <div class="col-lg-4">
          <div class="form-group">
                        <div class="form-group">
                                            <label>Mes</label>
                                            <select class="form-control" name="mes">
                                                <option value="01">Enero</option>
                                                <option value="02">Febrero</option>
                                                <option value="03">Marzo</option>
                                                <option value="04">Abril</option>
                                                <option value="05">Mayo</option>
                                                <option value="06">Junio</option>
                                                <option value="07">Julio</option>
                                                <option value="08">Agosto</option>
                                                <option value="069">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                        </div>                                
          </div>
       </div>
                               
        <div class="col-lg-4">
          <div class="form-group">                           
                         <div class="form-group">
                                            <label>Gestion</label>
                                            <select class="form-control" name="gestion">
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                            </select>
                        </div>
           </div>
            <button type="submit" class="btn btn-default" name="enviar">Filtrar</button>
        </div>

                          
                          </div><!-- /.row (nested) -->
                       </div>   <!-- /.panel-body -->
                    </div> <!-- /.panel -->
                </div>  <!-- /.col-lg-12 -->
               </form>  
            </div>
        </div>

    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="assets2/dist/js/sb-admin-2.js"></script>

    </body>

</html>

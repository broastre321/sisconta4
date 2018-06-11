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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!--texto de fila-->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                         <!--Columna izquierda -->
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <h1><label>Libro mayor del año</label></h1>
                                              <label>seleccione el Mes</label>
                                            <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/vendasCustom" method="get">
                        <div class="span12 well">
                            <div class="span6">
                                <select class="form-control" name="forma_pago">
                                                <option value="01">Enero</option>
                                                <option value="02">Febrero</option>
                                                 <option value="03">Marzo</option>
                                                <option value="04">Abril</option>
                                                 <option value="05">Mayo</option>
                                                <option value="06">Junio</option>
                                                 <option value="07">Julio</option>
                                                <option value="08">Agosto</option>
                                                <option value="09">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>


                                            </select>
                                
                            </div>
                        </div>
                               
                        <div class="span12" style="margin-left: 0; text-align: center">
                        <button type="submit" class="btn btn-default" name="enviar">Buscar</button>
                        </div>
                    </form>
                                            
                                        </div>
                              
                                        
                                    </form>
                                </div>
                                <!--COLUMNA DERECHA -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                          
                                            
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
            <?php //print_r($cuentas_ingresos) ?>
            <div class="row">
                 <!--una columna de 12 espacios -->
                <div class="col-lg-12">
                   
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Codigo Cuenta</th>
                                        <th>Tipo de Cuenta Ingreso</th>
                                        <th>Total Mes</th>
                                        <th>mes anterior </th>
                                        <th>mes anterior anterior</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <!-- fila 1 -->
                                     <?php
                                    

                                        echo '<tr class="odd gradeX">';
                                        foreach ($cuentas_ingresos as $cuentas_ingresos) {
                                        echo '<td><center>'.$cuentas_ingresos->codigo.'</center></td>';
                                        echo'<td><center>'.$cuentas_ingresos->nombre.'</center></td>';
                                         }
                                         
                                        echo'</tr>';
                                        # code...
                                   

                                   ?>
                                    
                                  
                                </tbody>
                            </table>
                    
                </div>
         
            </div>
          
        </div>




    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="assets2/dist/js/sb-admin-2.js"></script>

</body>

</html>

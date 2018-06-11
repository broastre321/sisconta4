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
                                            <h1><label>Libro Diario</label></h1>
                                             <label>seleccione la fecha</label>
                                            <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/vendasCustom" method="get">
                        <div class="span12 well">
                            <div class="span6">
                                <label for="">fecha de:</label>
                                <input type="date" name="dataInicial" class="span12" /><i class="fa fa-table fa-fw"></i>
                                <br>
                                <label for="">a:           </label>
                                <input type="date"  name="dataFinal" class="span12" /><i class="fa fa-table fa-fw"></i>
                            </div>
                        </div>
                               
                        <div class="span12" style="margin-left: 0; text-align: center">
                            <input type="reset" class="templatemo-white-button" value="Limpar" />
                            <button class="templatemo-blue-button"><i class="icon-print icon-white"></i> Imprimir</button>
                        </div>
                    </form>
                                            
                                        </div>
                              
                                        
                                    </form>
                                </div>
                                <!--COLUMNA DERECHA -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                           
                                               <!--columna derecha------------------------------------------------->
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
            
            
            
            <div class="row">
                 <!--una columna de 12 espacios -->
                <div class="col-lg-12">
                   
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nro Cuenta</th>
                                        <th>Ingreso</th>
                                        <th>Concepto</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>Egreso</th>
                                        <th>Transferencia</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <!-- fila 1 -->
                                    <tr class="odd gradeX">
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="even gradeA">
                                       <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    
                                     
                                    
                                  
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

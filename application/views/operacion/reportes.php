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

    <div id="wrapper">

        <!-- MENU -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    
                    <ul class="nav" id="side-menu">
                     
                        <li>
                            <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Libro Diario</a>
                        </li>
                        
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Libro Mayor<span class="fa arrow"></span></a>
                             </li>

                                <li>
                                    <a href="tables.html"><i class="fa fa-table fa-fw"></i> Libro Tesoreria</a>
                                </li>

                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Estado de resultados</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Balance</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
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
                                            <label>Libro mayor del año</label>
                                            <input class="form-control">
                                            
                                        </div>
                              
                                        
                                    </form>
                                </div>
                                <!--COLUMNA DERECHA -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Mes</label>
                                            <input class="form-control">
                                            
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
                                        <th>Cuenta</th>
                                        <th>Concepto</th>
                                        <th>Deber</th>
                                        <th>Haber</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <!-- fila 1 -->
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Becas</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>2</td>
                                        <td>Donativos</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>3</td>
                                        <td>Matricula</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="even gradeA">
                                       <td>4</td>
                                        <td>Servicios Profesionales</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>5</td>
                                        <td>Servicios Basicos</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>6</td>
                                        <td>Servicios Bancarios</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                     <tr class="even gradeA">
                                        <td>7</td>
                                        <td>Materiales de Oficina</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                     <tr class="even gradeA">
                                        <td>8</td>
                                        <td>Publicidad</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                     <tr class="even gradeA">
                                        <td>9</td>
                                        <td>Servicios de transporte</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                     <tr class="even gradeA">
                                        <td>10</td>
                                        <td>Limpieza</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                     <tr class="even gradeA">
                                        <td>11</td>
                                        <td>Tramites academicos</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                     <tr class="even gradeA">
                                        <td>12</td>
                                        <td>Inversion</td>
                                        <td> </td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    
                                  
                                </tbody>
                            </table>
                    
                </div>
         
            </div>
          
        </div>


    </div>

    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="assets2/dist/js/sb-admin-2.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reportes</title>
    <link href="<?php echo base_url() ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                                  
                                        <div class="form-group">
                                            <h1><label>Libro Diario de TRASNFERENCIAS</label></h1>
                                             <label>seleccione la fecha</label>
                                            <form target="_blank" action="<?php echo base_url() ?>Librodiario_transferencias/Filtrar" method="post">
                        <div class="span12 well">
                            <div class="span6">
                                <label for="">fecha de:</label>
                                <input type="date" name="incio" class="span12" /><i class="fa fa-table fa-fw"></i>
                                <br>
                                <label for="">a:           </label>
                                <input type="date"  name="fin" class="span12" /><i class="fa fa-table fa-fw"></i>
                            </div>
                        </div>
                               
                        <div class="span12" style="margin-left: 0; text-align: center">

                             <button class="btn btn-default" name="enviar" type="submit">Filtrar</button>
                        </div>
                    </form>
                                            
                                        </div>
                              
                                        
                                  
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
                    <?php //print_r($transferencias) ?>
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th bgcolor="#9B1C1C"><font color="white"><center>NRO</center></font></th>
                                        <th bgcolor="#9B1C1C" ><font color="white"><center>FECHA</center></font></th> 
                                        <th bgcolor="#9B1C1C"><font color="white"><center>DE</center></font></th>
                                        <th bgcolor="#9B1C1C"><font color="white"><center>A</center></font></th>
                                        <th bgcolor="#9B1C1C"><font color="white"><center>MOTIVO</center></font></th>
                                        <th bgcolor="#9B1C1C"><font color="white"><center>MONTO</center></font></th>
                                    
                                     
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <!-- fila 1 -->
                                    <?php
                                    foreach ($transferencias as $transferencia) {
                                        echo '<tr class="odd gradeX">';
                                        echo '<td bgcolor="white"><center>'.$transferencia->idtransferencias.'</center></td>';
                                        echo'<td bgcolor="white"><center>'.$transferencia->fecha.'</center></td>';
                                        echo '<td bgcolor="white"><center>'.$transferencia->DE.'</center></td>';
                                     echo '<td bgcolor="white"><center>'.$transferencia->A.'</center></td>';
                                       echo '<td bgcolor="white"><center>'.$transferencia->MOTIVO.'</center></td>';
                                       echo '<td bgcolor="white"><center>'.$transferencia->MONTO.'</center></td>';
                                      

                                    echo'</tr>';
                                        # code...
                                    }
                                      ?>
                                   
                                     
                                </tbody>
                            </table>
                            
                    </table>
                </div>
         
            </div>
          
        </div>




    <script src="<?php echo base_url() ?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/dist/js/sb-admin-2.js"></script>

</body>

</html>

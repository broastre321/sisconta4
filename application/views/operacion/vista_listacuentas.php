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
                            <center> <h1> LISTAS </h2> </center>
                 </div>
                    
                         <?php // print_r($arraydecontrolador2) ?> 
                      
                        <div class="panel-body">

     <div class="row">  <!-- FILA A SER PARTIDA EN DOS COLUMNAS -->
           <div class="col-lg-6">     <!-- COLUMNA IZQUIERDA -->
               <center> <h1> CUENTAS INGRESOS </h1> </center>
                                                            <!--
                                                            <select class="form-control" name="tipo_ingreso">
                                                                       <?php //foreach ($array1 as $cuenta1)
                                                                          // {
                                                                           //echo '<option value='.$cuenta1->codigo.'>'.$cuenta1->codigo.'-'.$cuenta1->nombre.'</option>';
                                                                          // }
                                                                       ?>
                                                             </select>   
                                                            -->
                        <div class="panel panel-default table-responsive">
                           <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">CODIGO <span class="caret"></span></a></td>
                                         <td><a  class="white-text templatemo-sort-by">NOMBRE <span class="caret"></span></a></td>
                                         <td><a class="white-text templatemo-sort-by">FECHA <span class="caret"></span></a></td>
                                       </tr>
                                     </thead>
                             <tbody>

                                     <?php if ($array1 == NULL) 
                                     {
                                     ?>
                                     <div class="alert alert-info" role="alert">array vacio!</div>
                                     <?php
                                     } else {
                                     foreach ($array1 as $columna) 
                                    {
                                     ?>
                                         <tr>
                                           <td><?php echo $columna->codigo; ?></td>
                                           <td><?php echo $columna->nombre; ?></td>
                                           <td><?php echo $columna->fecha; ?></td>
                                               <?php
                                               }
                                               }
                                               ?>
                                         </tr>
                             </tbody>
                           </table>
                         </div>
                
          </div> <!--FIN DE LA COLUMNA IZQUIERDA -->
                            
                               
                              
                      <div class="col-lg-6"> <!-- COLUMNA derecha -->
                          <center> <h1> CUENTAS EGRESOS </h1> </center>
                          <div class="panel panel-default table-responsive">
                           <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">CODIGO <span class="caret"></span></a></td>
                                         <td><a  class="white-text templatemo-sort-by">NOMBRE <span class="caret"></span></a></td>
                                         <td><a class="white-text templatemo-sort-by">FECHA <span class="caret"></span></a></td>
                                       </tr>
                                     </thead>
                             <tbody>

                                     <?php if ($array2 == NULL) 
                                     {
                                     ?>
                                     <div class="alert alert-info" role="alert">array vacio!</div>
                                     <?php
                                     } else {
                                     foreach ($array2 as $columna) 
                                    {
                                     ?>
                                         <tr>
                                           <td><?php echo $columna->codigo; ?></td>
                                           <td><?php echo $columna->nombre; ?></td>
                                           <td><?php echo $columna->fecha; ?></td>
                                               <?php
                                               }
                                               }
                                               ?>
                                         </tr>
                             </tbody>
                           </table>
                         </div> <!-- FIN DE LA tabla -->
                   </div> <!-- FIN DE LA COLUMNA DERECHA -->
                                
                                
                            </div>
                         
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div>   <!-- /.col-lg-12 --> 
            </div>     <!-- /.row -->
        </div> <!-- /#page-wrapper -->
   




   <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/dist/js/sb-admin-2.js"></script>

</body>

</html>

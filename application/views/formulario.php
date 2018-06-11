<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema de Contabilidad</title>
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets2/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        
            <div class="navbar-header"><!-- COLUMNNA CERO  -->
                <a class="navbar-brand" href="index.html">Sistema de Contabilidad "INSTITUTO SUPERIOR DE ESTUDIOS TEOLOGICOS",Nuestra Señora de La Paz
                </a>
            </div><!-- fin de columna cero -->
          

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown"><!-- COLUMNA DOS -->
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                    
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil </a>
                         </li>
                         <?php if($this->session->userdata('tipo') == 'Administrador'){?>
                                <li><a href="<?php echo base_url(); ?>Agregarempleados"><i class="fa fa-edit fa-fw"></i> Añadir usuario</a>
                                </li>     
                           <?php } ?>        
                             
                        <li class="divider"></li>        
                                <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
                                </li>
                    </ul>
                </li><!-- FIN  COLUMNA DOS -->
            </ul><!-- FIN  BARRA DE CABECERA -->
                  
            
              
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">         
                    <ul class="nav" id="side-menu">    <!--  menu  -->
                       
                        
                        <li>
                            <a href="<?php echo base_url(); ?>Admin"  ><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                                </li>
                   <?php if($this->session->userdata('tipo') == 'Administrador'){?>
                         <li>
                                <a href="<?php echo base_url(); ?>Empleados"><i class="fa fa-table fa-fw"></i>Usuarios</a>

                                <!-- /.nav-second-level -->
                            </li>
                       
                            
                            
                             <li>
                                <a href="<?php echo base_url(); ?>Agregarcuentas"><i class="fa fa-edit fa-fw"></i> Cuentas Contables</a>
                            </li>
                 <?php } ?>  
                            <li>
                                <a href="<?php echo base_url(); ?>Ingresos"><i class="fa fa-edit fa-fw"></i> Ficha de Ingresos</a>
                            </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Egresos"><i class="fa fa-edit fa-fw"></i> Ficha de Egresos</a>
                                </li>

                                 <li>
                                <a href="<?php echo base_url(); ?>Transferencias"><i class="fa fa-table fa-fw"></i>Transferencias</a>

                            </li>
                                 
                            
                            
                 <?php if($this->session->userdata('tipo') == 'Administrador'){?>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <a href="#"><i class="fa fa-table fa-fw"></i>Libro diario<span class="fa arrow"></span></a>
                                    <UL>
                                        <LI>
                                            <a href="<?php echo base_url(); ?>Librodiario_ingreso"><i class="fa fa-table fa-fw"></i>INGRESOS</a>
                                        </LI>
                                         <LI>
                                            <a href="<?php echo base_url(); ?>Librodiario_egreso"><i class="fa fa-table fa-fw"></i>EGRESOS</a>
                                        </LI>
                                         <LI>
                                            <a href="<?php echo base_url(); ?>Librodiario_transferencias"><i class="fa fa-table fa-fw"></i>TRANSFERECIAS</a>
                                        </LI>
                                    </UL>
                                </li>
                        <li>
                                            <a href="<?php echo base_url(); ?>Libromayor"><i class="fa fa-table fa-fw"></i>Libro Mayor</a>
                                        </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>Librotesoreria"><i class="fa fa-table fa-fw"></i>Libro Tesoreria</a>
                                                </li>
                               
                                        <li>
                                            <a href="<?php echo base_url(); ?>Balance"><i class="fa fa-table fa-fw"></i>Balance</a>
                                        </li>
                               
                            </ul>
                          </li>

                                <li>
                                <a href="<?php echo base_url(); ?>dashboardController"><i class="fa fa-edit fa-fw"></i> Reporte Gerencial</a>
                            </li>

                  <?php } ?>        
                           

                            <!-- /.nav-second-level -->
                    </ul>
                </div>   <!-- /.sidebar-collapse -->             
            </div>    <!-- /.navbar-static-side -->         
        </nav>
    </div>
        
    <!-- /#wrapper -->

                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="../vendor/metisMenu/metisMenu.min.js"></script>
                <script src="../dist/js/sb-admin-2.js"></script>
  
    </body>
</html>

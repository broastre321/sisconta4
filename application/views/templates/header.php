<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
                                                 <title>Inicio</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    
    <link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/templatemo-style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.2.min.js"></script> 


  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        
        <div class="profile-photo-container">
            
         
          <div class="profile-photo-overlay"></div>
        </div>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
              
              <! EN QUE SE DESPLEGARA CUANDO EL USUARIO SEA ADMNISTRADOR >
          <?php if($this->session->userdata('tipo') == 'Administrador'){?>
              
       <!--BOTON INICIO--------- -->
            <li>
                <a href="<?php echo base_url(); ?>admin" class="active" >
                     <!--icono-->
                        <i class="fa fa-home fa-fw">  </i>
                    <!--   -->
                    <h1> SISTEMA DE CONTABILIDAD SAN JERONIMO</h1>Inicio
                </a>
            </li>
        <!--   --------------- -->  
       
            <li><a href="<?php echo base_url(); ?>empleados"><i class="fa fa-users nav_icon"></i>Usuarios</a></li>
            <li><a href="<?php echo base_url(); ?>Ingresos"><i class="fa fa-pencil fa-fw"></i>ficha de ingreso</a></li>
            <li><a href="<?php echo base_url(); ?>Egresos"><i class="fa fa-bar-chart fa-fw"></i>ficha de Egresos</a></li>
            <li><a href="<?php echo base_url(); ?>Transferencias"><i class="fa fa-pencil fa-fw"></i>Transferencias</a></li>
            
           <li><a href="<?php echo base_url(); ?>Reportes"><i class="fa fa-database fa-fw"></i>Reportes</a></li>
           
            <?php }else{ ?>
            
            
            <! CUANDO NO ES ADMINISTRADOR >
            <li><a href="<?php echo base_url(); ?>admin" class="active"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
            
           <li><a href="<?php echo base_url(); ?>agregarventa"><i class="fa fa-bar-chart fa-fw"></i>Venta</a></li>
            <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-eject fa-fw"></i>Salir</a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    
      <!-- Main content  FILA CENTRAL ----------------------------------------------------->
      <div class="templatemo-content col-1 light-gray-bg"> 
          
      <a> BIENVENIDO USUARIO:ADMINISTRADOR </a>
      
        <div class="templatemo-top-nav-container">
           
              <nav class="templatemo-left-nav">
                <div class="row">
                    
                  <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                      <li><a href="<?php echo base_url(); ?>agregarempleados">Agregar nuevo usuario</a></li>
                    </ul>
                  </nav>
                    
                   <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                      <li><a href="login">Configuraciones de cuenta</a></li>
                    </ul>
                  </nav>
                    
                  <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                      <li><a href="<?php echo base_url(); ?>login/logout">Salir (cerrar sesion)</a></li>
                    </ul>
                  </nav>
                    
                    
                </div>
             </nav>    
       </div>
     
      
      
      
      
     </body>
         </html>
<?php

//Info devulve FALSO si no hay datos
if (!isset($info)) { $info = FALSE; }


// CARNET
$ci_empleado = array(
    'id'      => 'inputCiEmpleado',
    'name'      => 'ci_empleado',
    'maxlength'   => '40',
    'class'     => 'form-control input-sm',
    'type'      => 'number',
    'value'     => ($info) ? $info->ci_empleado:"",
    'required'    => 'required',
    'placeholder' => 'Ingrese nro de carnet'// cosas que tendra
);

//NOMBRE DE EMPLEADO
$nombre_empleado = array(
    'id'      => 'inputNombreEmpleado',
    'name'      => 'nombre_empleado',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->nombre_empleado:"",
    'required'    => 'required'
);
//APELLIDO DE EMPLEADO
$apellido_empleado = array(
    'id'      => 'inputApellidoEmpleado',
    'name'      => 'apellido_empleado',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->apellido_empleado:"",
    'type'      => 'text',
    'required'    => 'required'
);

//NRO DE TELEFONO
$telefono = array(
    'id'      => 'inputtelefono',
    'name'      => 'telefono',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->telefono:"",
    'required'    => 'required'

//DIRECCION
);
$direccion = array(
    'id'      => 'inputDireccion',
    'name'      => 'direccion',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->direccion:"",
    'type'      => 'text'

);
//USUARIO
$usuario = array(
    'id'      => 'inputUsuario',
    'name'      => 'usuario',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->usuario:"",
    'type'      => 'text',
    'placeholder' => 'Ingrese nombre de usuario'
    // cosas que tendra

);

//CONTRASEÑa
$password = array(
    'id'      => 'inputPassword',
    'name'      => 'password',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->password:"",
  //  'type'      => 'password'// campo tedra tipo contraseña
    'type'      => 'text',
      'placeholder' => 'Ingrese contraseña'
);
//PRIVILEGIO
$tipo = array(
    'id'      => 'inputTipo',
    'name'      => 'tipo',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->tipo:"",
    'type'      => 'text'
);

$ci_gar = array(
    'id'      => 'inputCiGar',
    'name'      => 'ci_gar',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->ci_gar:"",
    'type'      => 'text'
);
$garante = array(
    'id'      => 'inputGarante',
    'name'      => 'garante',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->garante:"",
    'type'      => 'text'
);
$tef_gar = array(
    'id'      => 'inputTefGar',
    'name'      => 'tef_gar',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->tef_gat:"",
    'type'      => 'text'
);
$dir_gar = array(
    'id'      => 'inputDir_Gar',
    'name'      => 'dir_gar',
    'class'     => 'form-control input-sm',
    'value'     => ($info) ? $info->dir_gar:"",
    'type'      => 'text'
);
//////////////////////////////////////////////////////////
$enviar = array(
    'name'      => 'enviar',
    'class'     => 'templatemo-blue-button',
    'type'      => 'submit',
    'content'   => 'Guardar'// texto del boton
);

$reset = array(
    'class'     => 'templatemo-white-button',
    'type'      => 'reset',
    'content'   => 'Limpiar campos'// texto del boton
);


//////////////////////////////////////////////////////////////
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="assets2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets2/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
  <!-- contents -->
  <div id="page-wrapper">
  <div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
      <h1 class="margin-bottom-10"> Agregar nuevo usuario</h1>
    
<?php echo form_open(); ?>
        <div class="row form-group">
            <!-- numero de carnet y dos columnas-->
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputCiEmpleado">Carnet de Identidad</label>
              <div class="fg-line">
                  <?php echo form_input($ci_empleado);?>
              </div>
          </div>
            
         
            
            <div class="col-lg-6 col-md-6 form-group">
              <label for="inputDireccion">Direccion</label>
              <div class="fg-line">
                  <?php echo form_input($direccion);?>
                </div>
          </div>
            
            
        </div>
      <!-- dos columnas-->
      
      <!-- dos columnas 2-->
        <div class="row form-group">
            
         
            <div class="col-lg-6 col-md-6 form-group">
              <label for="inputNombreEmpleado">Nombre</label>
              <div class="fg-line">
                  <?php echo form_input($nombre_empleado);?>
                </div>
          </div>
            
         <label for="inputUsuario">DATOS DE INICIO DE SESION</label>
                <div class="col-lg-6 col-md-6 form-group">
                      
              <div class="fg-line">
                  <?php echo form_input($usuario);?>
                </div>
          </div>
            
        </div>
      
      <!-- dos columnas-->
      
        <div class="row form-group">
            
         
             <div class="col-lg-6 col-md-6 form-group">
              <label for="inputApellidoEmpleado">Apellido</label>
              <div class="fg-line">
                  <?php echo form_input($apellido_empleado);?>
                </div>
          </div>
            
            
        
            
            <div class="col-lg-6 col-md-6 form-group">
                <label for="inputPassword">
                   
                  
                </label>
              <div class="fg-line">
                  <?php echo form_input($password);?>
                </div>
          </div>
            
        </div>
        <div class="row form-group">
            
          
              <div class="col-lg-6 col-md-6 form-group">
              <label for="inputTelefono">Telefono</label>
              <div class="fg-line">
                  <?php echo form_input($telefono);?>
                </div>
          </div>
          <!--<div class="col-lg-6 col-md-6 form-group">
              <label for="inputCiGar">Ci_gar</label>
              <div class="fg-line">
                  <?php echo form_input($ci_gar);?>
                </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputTefGar">Telefono Garante</label>
              <div class="fg-line">
                  <?php echo form_input($tef_gar);?>
                </div>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputDir_Gar">Direccion_Garante </label>
              <div class="fg-line">
                  <?php echo form_input($dir_gar);?>
                </div>
          </div>-->


            <div class="row form-group">

              <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputTipo">Tipo de privilegio</label>
                  <select class="form-control" name="tipo" id="inputTipo" class="form-control1">
                    <option>Administrador</option>
                    <option>Contador</option>
                  </select>
              </div>
            </div>
        </div>
      </div>
  </div>

  <center>
            <?php echo form_button($enviar); ?>
            <?php echo form_button($reset); ?>
      
      <a class=templatemo-white-button  href="<?php echo base_url(); ?>admin"> Atras</a>
      
  </center>
            <?php echo form_close(); ?>
      </div>
    <!-- fin de agregar clientes -->
 <!-- jQuery -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets2/dist/js/sb-admin-2.js"></script>
  </body>
</html>

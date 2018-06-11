<!DOCTYPE html>
<html >
    <head>
      <meta charset="UTF-8">
      <title>Login/Logout animation concept</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
      <link rel='stylesheet prefetch' href="<?php echo base_url(); ?>assets/login/js/open.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">
    </head>
    
    
    
    
    
    
          <! Inicio de cuerpo   Cuerpo       --------- >
        <body>
         <div class="cont">
            
          <div class="demo">
            <div class="login">
                <div class="login__check">
                </div>


                <form class="" action="<?php echo base_url(); ?>acceso" method="post">
                     <div class="login__form">
                         <h2>RED SOCIAL FACILITO  </h1>
                           <h1> "SAN JERONIMO" </h1>
                           <div class="login__row">
                           
                                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                                       <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                                </svg>
      <! ---------------Campo nro de carnet----------------------------        --------- >
                                 <input type="text" name="usuario" class="login__input name" placeholder="Ingrese su Nro de carnet"/>
                           </div>

                         
                        <div class="login__row">
                                  <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                                       <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                                  </svg>
                           <! Campo Contraseña       --------- >
                            <input type="password" name="password" class="login__input pass" placeholder="Contraseña"/>
                        </div>
                       <! Boton Ingresar      --------- >
                        <button type="submit" class="login__submit">Ingresar</button>

                     </div>
                </form>
              </div>
            </div>
          </div>
            
            
            
            
            
            
            
            
              <script src='<?php echo base_url(); ?>assets/login/js/jquery.min.js'></script>
              <script src="<?php echo base_url(); ?>assets/login/js/index.js"></script>

        </body>
</html>

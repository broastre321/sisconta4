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
                 <!--una columna de 12 espacios -->
                <div class="col-lg-3">
                       <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">cuentas <span class="caret"></span></a></td>
                                        
                                       </tr>
                                     </thead>
                           <tbody>
                                
                             <?php// print_r($array1) ?>
                            <?php if ($array3 == NULL) 
                                     {
                                     ?>
                                <tr>
                                     <td><?php echo "ninguno"; ?></td>
                                    
                               </tr>  
                                     <?php
                                     
                                     } 
                                     else {
                                     foreach ($array3 as $columna) 
                                    {
                                     ?>
                                         
                                       <tr> 
                                           <td><?php echo $columna->nombre; ?></td>
                                       <tr/>
                                          
                                               <?php
                                     }}
                                               
                             ?>

                             </tbody>    
                      </table>
                </div>
                 
                 <div class="col-lg-3">
                       <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">Total mes <span class="caret"></span></a></td>
                                       </tr>
                                     </thead>
                           <tbody>
                                        
                              <?php// print_r($array1) ?>
                            <?php if ($array1 == NULL) 
                                     {
                                     ?>
                                 
                                   <tr> 
                                     <td><?php echo "0"; ?></td>
                                     
                                   </tr>
                                     <?php
                                     
                                     } 
                                     else {
                                     foreach ($array1 as $columna) 
                                    {
                                     ?>
                                         
                               
                                     <tr> <td><?php echo $columna->sumacuentas; ?></td>    
                                     </tr>
                                           
                                               <?php
                                     }}
                                               
                             ?>

                             </tbody>    
                      </table>
                </div> 
                 
                  <div class="col-lg-3">
                       <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">Mes anterior <span class="caret"></span></a></td>
                                        
                                       </tr>
                                     </thead>
                           <tbody>
                               
                                     <?php if ($array2 == NULL) 
                                     {
                                     ?>
                                   
                             <tr>
                        <td><?php echo "0"; ?></td>
                         </tr>
                                    
                                     <?php
                                     } else {
                                     foreach ($array2 as $columna) 
                                    {
                                     ?>
                                         
                   
                     <tr> <td>  <?php echo $columna->sumacuentas; ?></td>  </tr>
                                               <?php
                                     }    }
                                       ?>

                             </tbody>    
                      </table>
                </div> 
                 
                  <div class="col-lg-3">
                       <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">Todos los meses<span class="caret"></span></a></td>
                                        
                                       </tr>
                                     </thead>
                           <tbody>
                           <?php if ($array3 == NULL) 
                                     {
                                     ?>
                                    
                                             <tr>
                           <td><?php echo "0"; ?></td>    
                                             </tr>
                                   
                                  <!--<div class="alert alert-info" role="alert">array 10</div> -->
                                     <?php
                                     } else {
                                     foreach ($array3 as $columna) 
                                    {
                                     ?>
                                  
                                  <tr> <td><?php echo $columna->sumacuentas; ?></td>
                             
                                               <?php
                                     }    }
                                       ?>    
                             </tbody>    
                      </table>
                </div> 
                 
                 
                 <div class="col-lg-12">
                       <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <tr>
                                         <td><a class="white-text templatemo-sort-by">Cuentas <span class="caret"></span></a></td>
                                         <td><a  class="white-text templatemo-sort-by">Total de cuentas mes <span class="caret"></span></a></td>
                                         <td><a class="white-text templatemo-sort-by"> Total de Meses anterior <span class="caret"></span></a></td>
                                         <td><a class="white-text templatemo-sort-by">Total  de todo <span class="caret"></span></a></td>
                                       </tr>
                                     </thead>
                   <tbody>
                         <tr>
                            <?php if ($array8 == NULL) 
                                     {
                                     ?>
                                     <td><?php echo "TOTALES"; ?></td>
                                     <td><?php echo "0"; ?></td>
                                     <?php
                                     } 
                                     else {
                                     foreach ($array8 as $columna) 
                                    {
                                     ?>          
                                           <td><?php echo "TOTALES"; ?></td>     
                                           <td><?php echo $columna->sumagrupos; ?></td>
                                           
                                               <?php
                                     }}             
                             ?>

                                                                        <?php if ($array9 == NULL) 
                                                                        {
                                                                        ?>
                                                                        <td><?php echo "0"; ?></td>
                                                                        <?php
                                                                        } else {
                                                                        foreach ($array9 as $columna) 
                                                                       {
                                                                        ?>
                                                                              <td><?php echo $columna->sumagrupos; ?></td>

                                                                                  <?php
                                                                        }    }
                                                                       ?>

                                           
                                  <?php if ($array10 == NULL) 
                                     {
                                     ?>
                                     <td><?php echo "0"; ?></td>
                                  <!--<div class="alert alert-info" role="alert">array 10</div> -->
                                     <?php
                                     } else {
                                     foreach ($array10 as $columna) 
                                    {
                                     ?>
                                           <td><?php echo $columna->sumagrupos; ?></td>
                                           
                                               <?php
                                     }    }
                                  ?>          

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

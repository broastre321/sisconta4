
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Comprobante Egreso</title>
	<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/impresionjquery.min.js">
        
        
        </script>
	<script>
			window.print();
	</script>

</head>

<style type="text/css">
/*.tabla {
	background-image: url(../../img/templates-img/bgfactura2.png);
	background-repeat: no-repeat;
	background-position: center top;
	background-size:cover;
	height:10px;
}*/
/*table th,td { border:0px solid #03F; }*/
*{
	font-family: "Consolas", Arial;
	font-size: 10px;
}
.ncliente{padding-left:110px;}
.ruc{padding-left:70px;}
.direccion{padding-left:110px; }
.numletras{padding-left:0px;}
.subtotal{padding-left:0px;}
.igv{padding-left:0px;}
.total{padding-left:0px;}
#productos { height: 253px;}


@media print{
	*{font-size: 11pt!important;}


	table .rfecha td,
	table .rcliente td,
	table .rdireccion td,
	table .numletras,
	table .row-footer {height: 0.4cm;}

	table #productos {background:#09C;padding:0;height: auto;}
	table .rproductos td {height: auto; padding:0;}
	table #productoss {background:#09C;padding:0;height: auto;}
  table .rproductoss td {height: auto;padding:0;}

	table table {background:#F00;}
}
</style>
<body>


                <?php   #print_r($venta); ?>

              
    
 




    
    
    
    
    
     <div id="page-wrapper">
            <!-- /.navbar-top-links -->


              <div class="row">
                <div class="col-lg-12">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6">
                                  
                                        <h1>Nro de ficha:
                                                                <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->idficha."";
                                      }
                                      ?>

                                        </h1>
                                    
                                    
                                     <h1>Tipo de documento:
                                                                <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->tipo_documento."";
                                      }
                                      ?>

                                     </h1>
                                    
                                    <h1>Detalle:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->detalle."";
                                      }
                                      ?>

                                  </h1>
                                    
                                     <h1>Monto:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->monto." "."Bs.";
                                      }
                                      ?>

                                  </h1>
                                                    
                                                
                                    <h1></h1>
                                <h1></h1>
                                
                                <center> <h1>RECIBI CONFORME </h1></center>
                                   <h1>Emitido a:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->nombre1."";
                                      }
                                      ?>
                                  </h1>
                                
                                   <h1>C.I.:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->carnet."";
                                      }
                                      ?>
                                  </h1>
                                
                                  
                       

                                      

                                       
     <!-- BOTONES------------------------------------------------------- -->



                                </div>


     <!-- /.col-lg-6 (nested) COLUMNA DERECHA------------------------------------------------------- -->
                                <div class="col-lg-6">
                                  <h1>Tipo de Egreso:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->nombre2."";
                                      }
                                      ?>
                                  </h1>
                                    
                                  <h1>Forma de Pago:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->forma_pago."";
                                      }
                                      ?>
                                  </h1>
                                     <h1>cuenta de la que sale el pago:
                                    <?php
                                      foreach ($tabla2 as $key ) 
                                       {    echo $key->tipo_cuenta."";
                                      }
                                      ?>
                                  </h1>
                                    
                                    <center>
                                    <h1>Firma:
                                    <?php
                                     
                                       {   echo "..................";
                                      }
                                      ?>
                                  </h1>
                                    </center>

                                  


                                </div>
                            </div>
                           

                  

                   
                            <!-- /.row (nested) -->
                        </div><!-- /.panel-body -->
                    </div>  <!-- /.panel -->
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
        </div>

<script type="text/javascript">
$(document).keydown(function(tecla){
	if (tecla.keyCode == 13) {

		location.href='<?php echo base_url();?>admin';
	}
});
</script>
</body>

</html>
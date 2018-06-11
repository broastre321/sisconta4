<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/autocomplete/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/joel.css" />

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/autocomplete/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/autocomplete/jquery.validate.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/maskmoney.js"></script>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">


      <?php
                          foreach ($sucursal as $key ) {
                                $key->nit_sucursal;
                                $key->llave_dosificacion;
                                $key->numero_autorizacion;
                                $key->direccion;
                                $key->telefono;
                          }

                           ?>

                    <div class="col-md-12">
                    <div class="prow form-group">
                        <div class="panel-heading">
                          <h1>Datos Facturacion</h1>
                            <div class="panel-text col-md-7">
                            <h2>Datos Ingresados</h2>
                            </div><br>
                        </div>

                            <form class="form-inline" action="<?php echo base_url(); ?>imprimir/ <?php $result->numero_factura ?>" method="post" id="formVendas">
                                    <?php echo form_hidden('numero_factura',$result->numero_factura) ?>
                                    <!--linea 1-->
                                  <div class="vali-form" id="divCadastrarOs">

                                      <div class="col-md-3 form-group">
                                        <label class="control-label"><h4>Numero de Factura: <?php echo $result->numero_factura ?></h4></label>
                                      </div>

                                      <div class="col-md-2 form-group">
                                        <label class="control-label"><h4>NIT: <?php echo $key->nit_sucursal; ?> </h4> </label>
                                        <!--<input type="text" name="autorizacion" placeholder= "<?php echo $key->nit_sucursal; ?>" readonly="">-->
                                      </div>

                                      <div class="col-md-3 form-group">
                                        <label class="control-label"><h4>Nro Autorizacion: <?php echo $key->numero_autorizacion; ?> </h4> </label>
                                        <!--<input type="text" name="autorizacion" placeholder= "<?php echo $key->numero_autorizacion; ?>" readonly="">-->
                                      </div>

                                      <div class="col-md-3 form-group">
                                        <label class="control-label"><h4>Fecha: <?php echo date('d/m/Y '); ?></h4></label>
                                        <input type="hidden" name="fecha" id="fecha" value="<?php date('Y/m/d') ?>"/>
                                      </div>
                                      <!--FIN DE LINEA 1-->
                                      <div class="clearfix"> </div><br>
                                      <!--
                                      <div class="col-md-4 form-group">
                                          <label class="control-label">CI: </label>
                                          <input type="text" name="nitci">
                                          <a href=""><button class="btn btn-green btn-sm" type="button"><i class="fa fa-plus fa-lg"></i></button></a>
                                          <a href=""><button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-plus fa-lg"></i></button></a>
                                      </div><br><br>-->
                                      <div class="clearfix"> </div>

                                      <div class="col-md-4 form-group">
                                        <label for="cliente"><h4>Cliente: </h4></label>
                                        <input id="cliente" class="span12" type="text" name="cliente" value="<?php echo ' '.$result->apellido_cliente ?>"  />
                                        <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="<?php echo $result->nitci ?>"  />
                                        <input id="valorTotal" type="hidden" name="valorTotal" value=""  />

                                      </div>

                                      <div class="col-md-4 form-group">
                                      <label for="tecnico"><h4>Cajero: </h4></label>
                                      <input id="tecnico" class="span12" type="text" name="tecnico" value="<?php echo ' '.$result->nombre_empleado.' '.$result->apellido_empleado ?>"  />
                                      <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?php echo $result->ci_empleado ?>"  />
                                      </div>
                                        <div class="clearfix"> </div>
                                </div>
                          </form>
                    </div>
                </div>




      <h1 class="margin-bottom-10">Bienvenido a Agregar Productos</h1>
      <h2> <p>Registre Producto</p> </h2>


      <form class="templatemo-login-form" id="formProdutos" action="<?php echo base_url(); ?>facturacion/adicionarProducto" method="POST">
        
        <div class="row form-group">
          
          <div class="col-lg-6 col-md-6 form-group"> 

                <input type="hidden" name="idVendasProduto" id="idVendasProduto" value="<?php echo $result->numero_factura?>" />
                         
            <label for="inputFirstName">CODIGO/NOMBRE : </label>
            <input type="text" class="form-control" name="cod_prod" id="cod_prod" placeholder="Ingrese el codigo o nombre de producto">  
            <input type="hidden" class="form-control" name="cod_prod_id" id="cod_prod_id">   
                  <input type="hidden" name="precio" id="precio" value=""/>             
          </div>
        
          <div class="col-lg-4 col-md-4 form-group">                  
            <label for="inputFirstName">CANTIDAD : </label>
            <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad">                
          </div>
          <br>
          <div class="col-lg-2 col-md-2 form-group-group"> 
            <button type="submit" onclick="window.location.reload()" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-plus"></i></button>            
        </div>
        </div>
        
      </form>

            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden" id="divProdutos">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Productos</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>SubTotal</td>
                        <td>Operacion</td>
                      </tr>
                    </thead>
                    <tbody>
                                                <?php
                                                $total = 0;
                                                $test = false;
                                                foreach ($produtos as $p) {
                                                    $total = $total + $p->sub_total;
                                                    echo '<tr>';
                                                    echo '<td>'.$p->cod_producto.'</td>';
                                                    echo '<td>'.$p->nombre_producto.'</td>';
                                                    echo '<td>'.'Bs. '.$p->precio.'</td>';
                                                    echo '<td>'.$p->cantidad.'</td>';
                                                    echo '<td><a href="" idAcao="'.$p->cod_detalle.'" prodAcao="'.$p->cod_producto.'" quantAcao="'.$p->cantidad.'" title="eliminar Producto"
                                                    class="btn btn-danger" type="button" ><span class="fa fa-close fa-lg"></span></a></td>';
                                                    echo '<td>Bs. '.number_format($p->sub_total,2,',','.').'</td>';
                                                    echo '</tr>';
                                                }?>
                                                <tr>
                                                  <td colspan="5" style="text-align: right"><strong>Total:</strong></td>
                                                  <td><strong>Bs. <?php echo number_format($total,2,',','.');?></strong> <input type="hidden" name="total-venda" id="total-venda" value="<?php echo number_format($total,2); ?>"></td>
                                                </tr>
                                            </tbody>
                  </table>    
                </div>                          
              </div>


            <form id="formFaturar" action="<?php echo base_url(); ?>admin" method="post">
                    <!--<div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h3 id="myModalLabel">factura de venta</h3>
                    </div>-->
                    <div class="modal-body">

                        <!--<div class="span12 alert alert-info" style="margin-left: 0"> Obligatorio llenar los campos marcados con un asterisco.</div>-->
                        <div class="span12" style="margin-left: 0">
                          <!--<label for="descricao">descripcion</label>-->
                          <input class="span12" id="descricao" type="hidden" name="descricao" value="<?php echo $result->numero_factura; ?> "  />

                        </div>
                        <div class="span12" style="margin-left: 0">
                          <div class="span12" style="margin-left: 0">
                            <!--<label for="cliente">Cliente*</label>-->
                            <input class="span12" id="cliente" type="hidden" name="cliente" value="<?php echo $result->apellido_cliente ?>" />
                            <input type="hidden" name="clientes_id" id="clientes_id" value="<?php echo $result->nitci ?>">
                            <input type="hidden" name="ventas_id" id="ventas_id" value="<?php echo $result->numero_factura; ?>">
                          </div>
                        </div>
                        <div class="cold-md-5" style="margin-left: 0">
                          <div class="span4" style="margin-left: 0">
                            <!--<label for="valor">SUB-TOTAL</label>-->
                            <input type="hidden" id="tipo" name="tipo" value="receita" />
                            <input class="span12 money" id="valor" type="hidden" name="valor" value="<?php echo number_format($total,2); ?> "  />
                          </div><br>
                         <div class="cold-md-5" style="margin-left: 0">
                            <label for="valor">&nbsp; &nbsp;EFECTIVO:</label>
                            <input type="hidden" id="tipo" name="tipo" value="receita" />
                            <input class="span12 money" id="bolivianos" type="text" name="bolivianos" value=""  />
                            <button type="button" name="calcular" id="calcular" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Calcular</button>

                          </div>
                        </div>
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><p align="center"><strong>CAMBIO</strong> </p></h4>
                              </div>
                              <div  class="modal-body">
                              <strong><input class="span12 money form-control1 m-n" style="text-align:center" id="cambio" type="text" name="cambio" value="bs" /></strong>

                        <div class="span12" style="margin-left: 0">
                          <div class="span4" style="margin-left: 0"><br>
                            <label for="recebido"> Cancelado </label>
                            &nbsp; &nbsp; &nbsp; &nbsp;<input  id="recebido" type="checkbox" name="recebido" value="1" />
                          </div>
                          <div id="divRecebimento" class="span8" style=" display: none">
                            <!--<div class="span6">
                              <label for="recebimento">fecha de recibimiento</label>
                              <input class="span12 datepicker" id="recebimento" type="text" name="recebimento" />
                            </div>

                            <div class="span4" style="margin-left: 0">
                              <label for="valor">CAMBIO</label>
                              <input type="hidden" id="tipo" name="tipo" value="receita" />
                              <input class="span12 money" id="valor" type="text" name="valor" value="<?php echo number_format($total,2); ?> "  />
                            </div><br>-->
                            <div class="span6">
                              <label for="formaPgto">Forma de Pago</label>
                              <select name="formaPgto" id="formaPgto" class="span12">
                                <option value="Dinheiro">Efectivo</option>
                                <option value="Cartão de Crédito">tarjeta  de Crédito</option>
                            </select>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <!--  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-faturar">Cancelar</button>-->
                      <button class="btn btn-danger">Facturar</button>
                      <!--  <button class="btn btn-danger">Imprimir</button>-->
                   </div>
                   </div>
                   </div>
                   </div>
                   </div>
                                
        </form> 

         <p align="center"> <a href="<?php echo base_url();?>imprimir" class="btn btn-danger" ><i class="fa fa-print fa-lg"></i> imprimir</a></p>
        

         </div> 


      </div>
  </div>



<script type="text/javascript">
$(document).ready(function(){

      
    $(".money").maskMoney();

    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
      }); 

     $("#calcular").click(function () {
        //saco el valor accediendo a un input de tipo text y name = nombre2 y lo asigno a uno con name = nombre3
      var bolivianos = $("#bolivianos").val();
      var total = $("#total-venda").val();
      var resultado = parseFloat(bolivianos) - parseFloat(total);
      //var resultado = au - ao;
      $("#cambio").val(resultado);
    //  $("#cambio").val($("#total-venda").val());
     });


      $("#cod_prod").autocomplete({
            source: "<?php echo base_url(); ?>facturacion/AutocompleteCodProd",
            minLength: 1,

            select: function( event, ui ) {
                 $("#cod_prod_id").val(ui.item.id);
                 $("#precio").val(ui.item.precio);
                 $("#cantidad").focus();
            }
      });


      $("#formProdutos").validate({
          rules:{
             precio: {required:true}
          },
          messages:{
             precio: {remote: 'Ingrese Cantidad'}
          },
          submitHandler: function( form){
                 var dados = $( 'form ').serialize();
              $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>facturacion/adicionarProducto",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );
                        $("#cantidad").val('');
                        $("#produto").val('').focus();
                    }
                    else{
                        alert('Se produjo un error al intentar añadir el producto.');
                    }
                  }
                  });
             }

       });


       $(document).on('click', 'a', function(event) {
            var idProduto = $(this).attr('idAcao');
            var quantidade = $(this).attr('quantAcao');
            var produto = $(this).attr('prodAcao');
            if((idProduto % 1) == 0){
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>ventas/excluirProduto",
                  data: "idProduto="+idProduto+"&quantidade="+quantidade+"&produto="+produto,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );

                    }
                    else{
                        alert('Se produjo un error al intentar añadir el producto.');
                    }
                  }
                  });
                  return false;
            }

       });

       $("#formFaturar").validate({
          rules:{
             bolivianos: {required:false    }
          },
          messages:{
             bolivianos: {required: 'Campo Requerido.'}
          },
        submitHandler: function( form ){
            var dados = $( form ).serialize();
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>facturacion/facturar",
              data: dados,
              dataType: 'json',
              success: function(data)
              {
                if(data.result == true){
                    window.location.reload(true);
                }
                else{
                    alert('Se ha producido un error al intentar la venta.');
                    $('#progress-fatura').hide();
                }
              }
              });
              return false;
          }
     });


  
      
});



</script>












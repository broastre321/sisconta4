
    <!--<a href="<?php echo base_url();?>ventas/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Venda</a>-->
<div class="table-responsive">
<div> 
   <table class="table table-bordered table-hover table-striped">



   </table>

<?php

if(!$results){?>
	<div class="templatemo-content-widget no-padding">
     <div class="panel panel-default table-responsive">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <CENTER><h5>REPORTES LIBRO MAYOR</h5></CENTER>
     </div>
<div class="widget-content nopadding">

  <table class="table table-striped table-bordered templatemo-user-table">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <center><td>Numero</td></center>
            <center><td>cuenta</td></center>
            <center><td>concepto</td></center>
            <center><td>deber</td></center>
            <center><td>haber</td></center>
            <center><td>saldo</td></center>
        </tr>
    </thead>
    <tbody>

        <thread>
            <td ></td>
            <td >becas</td>
            <td ></td>
            <td ></td>
            <td ></td>
            <td ></td>
        </thead>
    </tbody>
</table>
</div>
</div>
<?php } else{?>


<div class="templatemo-content-widget no-padding">
     <div class="panel panel-default table-responsive">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
     </div>
     <h1 align="center">Facturas Realizadas</h1><br>
<div class="widget-content nopadding">


<table class="table table-striped table-bordered templatemo-user-table">
    <thead>
        <tr valign="middle" style="backgroud-color: #2D335B">
            <th hi>NUMERO DE FACTURA</th>
            <th>CLIENTE</th>
            <th>FECHA DE VENTA</th>
            <th>TOTAL</th>
            <th>ESTADO </th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
      <?php # echo print_r($results); ?> <!--aumentar el php esto es para ver lo que tiene la consulta get-->
        <?php foreach ($results as $r) {
            //$dataVenda = date(('d/m/Y'),strtotime($r->dataVenda));
            //if($r->faturado == 1){$faturado = 'Sim';} else{ $faturado = 'Não';}
            echo '<tr>';
            echo '<td>'.$r->numero_factura.'</td>';
            echo '<td align="center">'.$r->apellido_cliente.'</td>';
            echo '<td align="center">'.$r->fecha.'</td>';
            echo '<td align="center">'.$r->venta_total.' Bs.</td>';
            echo '<td align="center">'.$r->estado.'</td>';
            echo '<td align="center">';
          //  if($this->permission->checkPermission($this->session->userdata('permissao'),'vVenda')){

          //  if($this->permission->checkPermission($this->session->userdata('permissao'),'eVenda')){
          //      echo '<a style="margin-right: 1%" href="'.base_url().'index.php/vendas/editar/'.$r->numero_factura.'" class="btn btn-info tip-top" title="Editar la venta"><i class="icon-pencil icon-white"></i></a>';
          //  }
          //  if($this->permission->checkPermission($this->session->userdata('permissao'),'dVenda')){

      echo '<a style="margin-right: 1%" href="'.base_url().'ventas/excluir/'.$r->numero_factura.'" class="btn btn-danger btn-lg" title="Ver Más detalles"><span class="fa fa-exclamation-circle nav_icon "></span></a>';
        //    }

            echo '</td>';
            echo '</tr>';
        }?>
        <tr>

        </tr>
    </tbody>
</table>
</div>
</div>
<?php } ?>
</div>
</div>

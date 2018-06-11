
<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
      <h1 class="margin-bottom-10">Bienvenido a Datos de la Autorización</h1>
      <h2> <p> Ingrese el Nuevo codigo de Autorización </p> </h2>

        
        <div class="row form-group">
          
          <div class="col-lg-6 col-md-6 form-group"> 


        <br>
         <?php echo form_open('autorizacion/registrar', 'role="form"'); ?>
             <center><table>
                 <tr>

                   <input type="hidden" name="grabar" value="si" />
                   <td>&nbsp;&nbsp;&nbsp;Numero de Autorizacion:&nbsp;&nbsp; </td>
                   <td>
                   <input type="number" class="form-control" name="autorizacion" id="autorizacion" placeholder="nuevo codigo" value="<?php echo set_value('autorizacion') ?>"/>    
             </td>
                 </tr>

                 <tr>
                   <td></td>
                   <td> <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font> </td>
                 </tr>
                 <tr>
                   <td> </td>
                   <br>
                   <br>
                   <td><br> <input type="submit" class="btn btn-primary" value="ACEPTAR" title="ACEPTAR" /> </td>
                 </tr>
             </table></center>
         <?php echo form_close() ?>
         <br>


        </div>
</div>
</div>
<div class="content-mid">

<fieldset>
  <legend>Formulario de registro</legend>
   <?php echo form_open('cliente/registrar', 'role="form"'); ?>
       <table>
           <tr>
             <td> Apellido: </td>
             <td> <input type="text" name="apellido" placeholder="nombre" value="<?php echo set_value('apellido') ?>" /> </td>
           </tr>

           <tr>
             <input type="hidden" name="grabar" value="si" />
             <td> NIT/CI: </td>
             <td> <input type="text" name="nit" value="<?php echo set_value('nit') ?> "/> </td>
           </tr>
           <!--<tr>
             <td> Password: </td>
             <td> <input type="password" name="pass" /> </td>
           </tr>-->
           <tr>
             <td></td>
             <td> <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font> </td>
           </tr>
           <tr>
             <td> </td>
             <td> <input type="submit" value="Registrarme" title="Registrarme" /> </td>
           </tr>
       </table>
   <?php echo form_close() ?>
</fieldset>
</div>

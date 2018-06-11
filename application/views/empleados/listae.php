<div class="table-responsive">
   <table class="table table-bordered table-hover table-striped">



   </table>



   <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                  <h1><caption>Lista de Empleados</caption></h1>
                <thead>

                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">CI EMPLEADOS <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">NOMBRE <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">APELLIDOS <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TELEFONO <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">DIRECCION <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">USUARIO <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">PASSWORD <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TIPO <span class="caret"></span></a></td>
                    <!--<td><a href="" class="white-text templatemo-sort-by">CI_GARANTE <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">GARANTE <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">TELEFONO GARANTE <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">DIRECCION GARANTE <span class="caret"></span></a></td>-->

                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                <?php
          		if ($data_get == NULL) {
          		?>
          		<div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
          		<?php
          		} else {
          		foreach ($data_get as $row) {
          		?>
                  <tr>
                    <td><?php echo $row->ci_empleado; ?></td>
                    <td><?php echo $row->nombre_empleado; ?></td>
                    <td><?php echo $row->apellido_empleado; ?></td>
                    <td><?php echo $row->telefono; ?></td>
                    <td><?php echo $row->direccion; ?></td>
                    <td><?php echo $row->usuario; ?></td>
                    <td><?php echo $row->password; ?></td>
                    <td><?php echo $row->tipo; ?></td>
                    <!--<td><?php echo $row->ci_gar; ?></td>
                    <td><?php echo $row->garante; ?></td>
                    <td><?php echo $row->tef_gar; ?></td>
                    <td><?php echo $row->dir_gar; ?></td>-->
                    <td>
                    	<a href="<?php echo site_url('Empleados/edit/' . $row->ci_empleado); ?>" class="btn btn-warning "><span class="fa fa-wrench nav_icon "></span></a>
                    	<a href="<?php echo site_url('Empleados/delete/' . $row->ci_empleado); ?>" class="btn btn-danger"><span class="fa fa-times-circle nav_icon "></span></a>
                    </td>
              		<?php
              		}
          		}
              		?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
</div>

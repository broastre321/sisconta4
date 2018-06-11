        <!-- MENU -->
  <!-- /.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->
        <div id="page-wrapper">
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!--texto de fila-->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                         <!--Columna izquierda -->
                                <div class="col-lg-6">
                                        <div class="form-group well">
                                            <h1><label>Libro mayor del año</label></h1>
                                              <label>Seleccione el Mes</label>
                                            <form target="_blank" action="<?php echo base_url() ?>Libromayor_ingresos/buscarLibro" method="post">
                                              <div class="span3">
                                                <div class="span3">
                                                  <select class="form-control" name="tipo_cuenta">
                                                    <option value="1">Ingreso</option>
                                                    <option value="2">Egreso</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="span12">
                                                  <div class="span6">
                                                    <select class="form-control" name="mes">
                                                      <option value="01">Enero</option>
                                                      <option value="02">Febrero</option>
                                                       <option value="03">Marzo</option>
                                                      <option value="04">Abril</option>
                                                       <option value="05">Mayo</option>
                                                      <option value="06">Junio</option>
                                                       <option value="07">Julio</option>
                                                      <option value="08">Agosto</option>
                                                      <option value="09">Septiembre</option>
                                                      <option value="10">Octubre</option>
                                                      <option value="11">Noviembre</option>
                                                      <option value="12">Diciembre</option>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="span12" style="margin-left: 0; text-align: center">
                                                  <button class="btn btn-default" type="submit">Buscar</button>
                                              </div>
                                          </form>

                                        </div>


                                    </form>
                                </div>
                                <!--COLUMNA DERECHA -->
                                <div class="col-lg-6">
                                    <div class="form-group">


                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <?php //print_r($cuentas_ingresos) ?>
            <div class="row">
                 <!--una columna de 12 espacios -->
                <div class="col-lg-12">

                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Codigo Cuenta</th>
                                        <th>Tipo de Cuenta Ingreso</th>
                                        <th>Total Mes</th>
                                        <th>mes anterior </th>
                                        <th>mes anterior anterior</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- fila 1 -->
                                     <?php
                                        if($cuentas){

                                          foreach ($cuentas as $cuentas_ingresos) {
                                            echo '<tr class="odd gradeX">';
                                            echo '<td><center>'.$cuentas_ingresos->codigo.'</center></td>';
                                            echo'<td><center>'.$cuentas_ingresos->nombre.'</center></td>';
                                            echo '<td><center>'.$cuentas_ingresos->monto.'</center></td>';
                                            echo '<td><center>'.$cuentas_ingresos->monto_anterior.'</center></td>';
                                            echo '<td><center>'.$cuentas_ingresos->anterior_anterior.'</center></td>';
                                            echo'</tr>';
                                          }

                                        }

                                   ?>
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


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
                              <h1><label>Balance General</label></h1>
                                         <!--Columna izquierda -->
                            <form role="form" action="<?php echo base_url(); ?>Balance" method="POST">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                          <label>Seleccione la cuenta</label>
                                            <select class="form-control" name="tipo_cuentas">
                                                <option value="1">Ingresos</option>
                                                <option value="2">Egresos</option>
                                            </select>
                                        </div>
                                   <div class="span12" style="margin-left: 0; text-align: center">
                                        <button class="btn btn-default" name="enviar" type="submit">Buscar</button>
                                    </div>   
                                    
                                </div>
                                <!--COLUMNA DERECHA -->
                             
                                  
                          </form>
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

        

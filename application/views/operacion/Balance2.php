
        <!-- MENU -->
  <!-- /.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->

            <div class="row">
                 <!--una columna de 12 espacios -->
                <div class="col-lg-12">
                       <table class="table table-striped table-bordered templatemo-user-table">
                                     <thead>  <!-- CABECERA PARA LAS EQIQUETAS -->
                                       <th>Nro Cuenta</th>
                                       <th>Cuentas</th>
                                       <th>Total Mes</th>
                                     
                                     </thead>
                           <tbody>
                             <?php
                            
                             $mes_total = 0;
                           
                             foreach ($Balances_totales as $ficha) {
                                 echo '<tr class="odd gradeX">';
                                 echo '<td>'.$ficha->codigo.'</td>';
                                 echo '<td>'.$ficha->nombre.'</td>';
                                 echo '<td>'.$ficha->monto.'</td>';
                                 $mes_total=$mes_total+$ficha->monto;
                                 
                               
                                echo '</tr>';
                               }
                            echo '<td colspan="2" style="text-align: right"><strong>TOTAL:</strong></td>';
                            echo '<td><strong>'.$mes_total.'</strong></td>';
                           
                              ?>
                             </tbody>
                         </table>
                </div>


            </div>

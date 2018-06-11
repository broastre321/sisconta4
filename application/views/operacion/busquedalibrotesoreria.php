
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
                                       <th>Total Mes Anterior</th>
                                      <th>MONTO TOTAL</th>
                                     </thead>
                           <tbody>
                             <?php
                            
                             $mes_total = 0;
                             $mes_anterior = 0;
                             $total_monto = 0;
                             foreach ($fichas as $ficha) {
                                 echo '<tr class="odd gradeX">';
                                 echo '<td>'.$ficha->codigo.'</td>';
                                 echo '<td>'.$ficha->nombre.'</td>';
                                 if($ficha->tipo_cuentas_idtipo_cuentas == 1){
                                   $mes_total = $mes_total + $ficha->monto;
                                   echo '<td> + '.$ficha->monto.'</td>';
                                 }else{
                                   $mes_total = $mes_total - $ficha->monto;
                                    echo '<td> - '.$ficha->monto.'</td>';
                                 }
                                 if($anteriores){
                                   foreach ($anteriores as $anterior) {
                                      if($ficha->codigo == $anterior->codigo){
                                           if($anterior->tipo_cuentas_idtipo_cuentas == 1){
                                             $mes_anterior = $mes_anterior + $anterior->monto;
                                             echo '<td> + '.$anterior->monto.'</td>';
                                           }else{
                                             $mes_anterior = $mes_anterior - $anterior->monto;
                                             echo '<td> - '.$anterior->monto.'</td>';
                                           }
                                      }                                
                                   }
                                 }else{
                                   echo '<td></td>';
                                 }
                                 if ($totales) {
                                   foreach ($totales as $total) {
                                     if($ficha->codigo == $total->codigo){
                                       if($total->tipo_cuentas_idtipo_cuentas == 1){
                                         $total_monto = $total_monto + $total->monto;
                                         echo '<td> + '.$total->monto.'</td>';
                                       }else{
                                         $total_monto = $total_monto - $total->monto;
                                         echo '<td> - '.$total->monto.'</td>';
                                       }
                                    }
                                   }
                                 }else{
                                   echo '<td></td>';
                                 }
                                echo '</tr>';
                               }
                            echo '<td colspan="2" style="text-align: right"><strong>TOTAL:</strong></td>';
                            echo '<td><strong>'.$mes_total.'</strong></td>';
                            echo '<td><strong>'.$mes_anterior.'</strong></td>';
                            echo '<td><strong>'.$total_monto.'</strong></td>';
                              ?>
                             </tbody>
                         </table>
                </div>


            </div>

       <div class="card" id="TableSorterCard">
           <div class="card-header py-3">
               <div class="row table-topper align-items-center">
                   <div class="col-12 col-sm-5 col-md-6 text-left" style="margin: 0px;padding: 5px 15px;">
                       <p class="text-primary m-0 font-weight-bold" style="color: #343a40 !important;">Liste Des
                           Rendez-Vous</p>
                       {{-- </p> <?php print_r($data); ?> <p> --}}
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="table-responsive">

                       <table class="table table-striped table tablesorter" id="ipi-table">
                           <thead
                               style="color:white; background-color: #3467ef !important; border-color: #3467ef; !important">
                               <tr>
                                   <th class="text-center">Nom</th>
                                   <th class="text-center">Prénom</th>
                                   <th class="text-center">Heure</th>
                                   <th class="text-center">Email</th>
                                   <th class="text-center">Téléphone</th>
                                   <th class="text-center">Déscription</th>
                               </tr>
                           </thead>
                           <tbody class="text-center">
                               <?php
                               $cx = new PDO('mysql:host=localhost;port=3312;dbname=dentaire;charset=utf8', 'root', '');
                               $return = $cx->query('select nom,prenom,description,time_rdv,email,tel from rdvs');
                               // $return = $cx->query('select nom,prenom,description,time_rdv,email,tel from rdvs
                               // where date_rdv=CURDATE()');
                               $i = 0;
                               while ($tab = $return->fetch()) {
                               $i++;
                               if ($i % 2 == 0) { ?>
                               <tr>
                                   <td><?php echo $tab['nom']; ?></td>
                                   <td><?php echo $tab['prenom']; ?></td>
                                   <td><?php echo $tab['time_rdv']; ?></td>
                                   <td><?php echo $tab['email']; ?></td>
                                   <td><?php echo $tab['tel']; ?></td>
                                   <td><?php echo $tab['description']; ?></td>
                               </tr>
                               <?php } else { ?>
                               <tr>
                                   <td><?php echo $tab['nom']; ?></td>
                                   <td><?php echo $tab['prenom']; ?></td>
                                   <td><?php echo $tab['time_rdv']; ?></td>
                                   <td><?php echo $tab['email']; ?></td>
                                   <td><?php echo $tab['tel']; ?></td>
                                   <td><?php echo $tab['description']; ?></td>
                               </tr>
                               <?php }
                               }
                               ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>

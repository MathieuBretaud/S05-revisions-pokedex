<body class="" style="background-color : #c14040">


   <h1 class="text-center text-white">Détails de <?= $viewVars['pokemons']->getNom() ?> </h1>

   <div class="row  row-cols-md-4 d-flex justify-content-center text-white ">
      <div class="col"><img src="<?= $absoluteUrl . '/img/' . $viewVars['pokemons']->getNumero() . '.png' ?>" alt=""></div>
      <div class="col">
         <div class="card " style="background-color :#ab3838 ">
            <div class="p-4">
               <h2>#<?= $viewVars['pokemons']->getNumero() ?> <?= $viewVars['pokemons']->getNom() ?></h2>
               <div class="d-inline p-2 rounded" style="width: 5rem; background-color:#<?= $viewVars['comp'][0]->type_color ?>"><?= $viewVars['comp'][0]->type_name ?></div>
               <?php
               if (isset($viewVars['comp'][1])) : ?>

                  <div class="d-inline p-2 rounded " style="width: 5rem; background-color:#<?= $viewVars['comp'][1]->type_color ?>"><?= $viewVars['comp'][1]->type_name ?></div>
               <?php endif; ?>
               <h2 class="p-2">Statistiques</h2>


               <div class="">
                  <div class="">
                     <tbody style="width: 5em;">
                        <tr class="m-auto">
                           <th scope="row c">PV</th>
                           <td><?= $viewVars["pokemons"]->getPv() ?></td>
                           <td>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getPv() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                           </td>

                        </tr>
                     </tbody>
                  </div>
                  <tbody style="width: 5em;">
                     <tr class="m-auto">
                        <th scope="row">PV</th>
                        <td><?= $viewVars["pokemons"]->getPv() ?></td>
                        <td>
                           <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getPv() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </td>
                     </tr>
                  </tbody>
                  <tbody style="width: 5em;">
                     <tr class="m-auto">
                        <th scope="row">PV</th>
                        <td><?= $viewVars["pokemons"]->getPv() ?></td>
                        <td>
                           <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getPv() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </td>
                     </tr>
                  </tbody>
                  <tbody style="width: 5em;">
                     <tr class="m-auto">
                        <th scope="row">PV</th>
                        <td><?= $viewVars["pokemons"]->getPv() ?></td>
                        <td>
                           <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getPv() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </td>
                     </tr>
                  </tbody>
                  <tbody style="width: 5em;">
                  <tr class="m-auto">
                     <th scope="row">PV</th>
                     <td><?= $viewVars["pokemons"]->getPv() ?></td>
                     <td>
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getPv() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </td>
                  </tr>
                  </tbody>
               </div>
            </div>

         </div>
      </div>
   </div>
</body>
<?php dump($viewVars); ?>
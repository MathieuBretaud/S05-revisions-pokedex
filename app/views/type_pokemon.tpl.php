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


               <div class="d-flex ">
                  <ul style="list-style-type: none;">
                     <li>PV</li>
                     <li>Attaque</li>
                     <li>Défense</li>
                     <li>Attaque spé.</li>
                     <li>défense spé.</li>
                     <li>Vitesse</li>
                  </ul>
                  <ul style="list-style-type: none;">
                     <li><?= $viewVars["pokemons"]->getPv(); ?></li>
                     <li><?= $viewVars["pokemons"]->getAttaque(); ?></li>
                     <li><?= $viewVars["pokemons"]->getDefense(); ?></li>
                     <li><?= $viewVars["pokemons"]->getAttaque_spe(); ?></li>
                     <li><?= $viewVars["pokemons"]->getDefense_spe(); ?></li>
                     <li><?= $viewVars["pokemons"]->getVitesse(); ?></li>
                  </ul>

                  <ul>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
                     </div>
                     <li class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getPv() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </li>
                     <li class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getAttaque() . '%' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </li>
                     <li class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getDefense() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </li>
                     <li class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getAttaque_spe() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </li>
                     <li class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getDefense_spe() . '%' ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </li>
                     <li class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $viewVars["pokemons"]->getVitesse() . '%' ?> ;min-width: 30em" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </li>

                  </ul>


               </div>
            </div>

         </div>
      </div>
   </div>
</body>

 
<body class=" text-center" style= "background-color : #c14040">


<h5 class="text-white text-start ms-3">Cliquez sur un type pour voir tous les Pokémon de ce type </h5>


<ul class="d-flex flex-wrap p-3" style="list-style: none;;">
<?php foreach($viewVars['pokemons'] as $Pokemons): ?>
<a href="<?= $router->generate('hometypes',['id' => $Pokemons->getId()]); ?>" class="text-decoration-none"><li class="  text-white " style="margin: 1rem ;border-radius: 10px  ;width: 30rem; padding : 2rem 10rem; background-color:#<?= $Pokemons->getColor()?> " ><?= $Pokemons->getName() ?></li></a>
<?php endforeach ;?>
</ul>


<?php  dump($viewVars) ?> 




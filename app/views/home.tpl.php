<body class=" text-center" style= "background-color : #c14040">
<div class="row ">

<?php foreach($viewVars["pokemons"] as $pokemon ): ?>
<div class="col ">
<div class="card  m-2 " style="width: 20rem ; background-color :#ab3838 ;border-radius:30px">
<div class="">
  <a href="<?= $router->generate('type',['id' => $pokemon->getNumero()]); ?>"><img src="<?= $absoluteUrl.'/img/'.$pokemon->getNumero().'.png'?>" class="card-img-top" alt="..."></a>
  </div>
  <div class="card-body rounded">
    <h5 class="card-title text-white">#<?= $pokemon->getNumero()?> <?= $pokemon->getNom()?></h5>
    </div>
    </div>
</div>
<?php endforeach; ?>
</div>
</body>
</html>
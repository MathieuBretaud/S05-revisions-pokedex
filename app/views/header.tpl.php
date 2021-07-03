<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 
    

    <nav class="navbar navbar-light bg-light m-3 " style="border-radius:1rem ;">  <div class="container-fluid">
    <a class="navbar-brand text-danger fw-bold" href="<?= $router->generate('home'); ?>">
      Pokédex
    </a>
    <ul class="nav justify-content-end navbar-brand ">
  <li class="nav-item">
    <a class="nav-link text-danger"  href="#">Liste</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="<?= $router->generate('parType'); ?>">Types</a>
  </li>
  
  
</ul>
  </div>
  
</nav>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
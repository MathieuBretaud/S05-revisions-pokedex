<?php


class MainController 
{
    public function home()
    {
        
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAllPokemon();

        $this->show('home', [
             'pokemons'=>$pokemons
        ]);
    }

    private $router;

    // Le constructeur va récupérer le $router en argument
    public function __construct($router)
    {
        $this->router = $router;
    }
    

    public function type($params)
    {
        // On récupère l'id de la marque
        $typeId = $params['id'];

        // On va chercher les produits du type demandé
        $pokemonModel = new Type();
        $pokemons = $pokemonModel->findAllTypePokemon($typeId);

        $typesModel = new Pokemon_type();
        $typePokemon = $typesModel->findType($typeId);
        // dd($products);

        // On va chercher les infos du type demandé
        $typeModel = new Type();
        $type = $typeModel->find($typeId);

        // Les données de la vue
        $viewVars = [
            'type' => $type,
            'pokemons' => $pokemons,
            'comp' => $typePokemon,
        ];

        // On appelle la méthode qui affiche le template
        $this->show('type_pokemon', $viewVars);
    }

    public function parType()
    {
        
        $typeModel = new Type();
        $pokemons = $typeModel->findAllTypePokemons();

        $this->show('parType', [
             'pokemons'=>$pokemons
        ]);
    }


    public function homeTypes($params)
    {
        // On récupère l'id de la marque
        $typeId = $params['id'];

        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAllPokemon();
        // On va chercher les produits du type demandé
        
        $typesModel = new Pokemon_type();
        $typePokemon = $typesModel->findTypes($typeId);
        // dd($products);

        // On va chercher les infos du type demandé
        $typeModel = new Type();
        $type = $typeModel->find($typeId);

        // Les données de la vue
        $viewVars = [
            'type' => $type,
            'pokemons' => $pokemons,
            'comp' => $typePokemon,
        ];

        // On appelle la méthode qui affiche le template
        $this->show('hometype', $viewVars);
    }

    protected function show($viewName, $viewVars = []) {

        // $viewVars est disponible dans chaque fichier de vue

        // Variable qui contient la base URL pour les liens absolus
        // sera disponible dans les templates (la variable est "plus lisible" ainsi)
        $absoluteUrl = $_SERVER['BASE_URI'];
        
        // On va chercher les 5 marques du pied de page
        // qui seront directement accessibles dans footer.tpl.php
        
        // (Une fois que ces Models ont étés fabriqués,
        // je peux aller appeler une de ses méthode dans un contrôleur
        // pour aller récupérer des données en BDD)

        // $brandModel = new Brand();
        // $topFiveBrands = $brandModel->findTopFiveFooter();
        // dd($topFiveBrands);

        // Idem pour les types
        // On va chercher les 5 types du pied de page
        // $typeModel = new Type();
        // $topFiveTypes = $typeModel->findTopFiveFooter();
        // dd($topFiveTypes);

        // Notre router (raccourci pour écriture dans les tpl)

        $router = $this->router;

        // En-tête
        require __DIR__ . '/../views/header.tpl.php';
        // Inclusion du template pour rendu HTML renvoyé par le serveur
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        
    }


}
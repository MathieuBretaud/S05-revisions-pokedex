<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/utils/Database.php';
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Models/Pokemon.php';
require __DIR__ . '/../app/Models/Type.php';
require __DIR__ . '/../app/Models/Pokemon_type.php';



$router = new AltoRouter();
//On définit le chemin de base de notre dossier de travail sur localhost
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    // Méthode HTTP
    'GET',
    // La motif de l'URL (la route)
    '/',
    // Destination de la route = page que l'on souhaite afficher
    [
        'controller' => 'MainController',
        'method' => 'home',
    ],
    // Nom interne de la route
    'home'
);

$router->map(
    // Méthode HTTP
    'GET',
    // La motif de l'URL (la route)
    '/types/[i:id]',
    // Destination de la route = page que l'on souhaite afficher
    [
        'controller' => 'MainController',
        'method' => 'type',
    ],
    // Nom interne de la route
    'type'
);


// La requête du client correspond-elle à une route configurée dans AltoRouter
$match = $router->match();

// Si une route correspond
if ($match !== false) {
    // $match = [
    //   "target" => [
    //     "controller" => "CatalogController"
    //     "method" => "category"
    //   ]
    //   "params" => [
    //     "id" => 2
    //    ]
    //   "name" => "category"
    // ]

    //dd($match); // dump($match); die();

    // Destination de la route
    $destination = $match['target'];

    // On détermine le contrôleur à appeler
    $controllerName = $destination['controller'];
    // On détermine la méthode à appeler
    $methodName = $destination['method'];

    // Dispatcher

    // @todo Vérifier que la destination existe, sinon 404

    // 1. On instancie notre contrôleur
    // /!\ en lui transmettant le $router :tada:
    $controller = new $controllerName($router); // Par ex. new MainController()

    // 2. On appelle la méthode souhaitée du contrôleur
    // en lui transmettant les paramètres fournis par AltoRouter
    // c'est en effet AltoRouter qui extrait les valeurs
    // d'une route comme /category/[i:id] depuis /category/2
    // ce qui donnerait
    // "params" => [
    //     "id" => "2"
    // ]
    $controller->$methodName($match['params']); // Par ex. ->home();
}
else {
    // On envoie une 404
    http_response_code(404);
    echo 'Page non trouvée.';
}
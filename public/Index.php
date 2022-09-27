<?php
require __DIR__ . "/../init.php";
require __DIR__ ."/../views/layout/head.php";

// Here we define every possible route and their function !
$routes = [
    '/index' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/siteMap' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'show'
    ],
];

// We check if PATH_INFO is set and if it`s set executes the right Pathing via Routing !
// This enables us to handle all sites over 1 Front Controller index.php!
$pathInfo = $_SERVER['PATH_INFO'];
if (isset($routes[$pathInfo])) {
    $route = $routes[$pathInfo];

    /** @var $container
     *
     * Container handles everything from creating postRepo
     * to handling the DB Query Request !!
     * (if an Instance of postRepo exists gets used if not a new one will be created)
     */
    $controller = $container->make($route['controller']);
    $method = $route['method'];

    $controller->$method();
}

// Would need a new If else for every new Path / Route  with the code below !

//if ($pathInfo == "/index")
//{
//    $postsController = $container->make("postsController");
//    $postsController-> index();
//}
//elseif ($pathInfo == "/siteMap")
//{
//    $postsController = $container->make("postsController");
//    $postsController-> index();
//}
//elseif ($pathInfo == "/post")
//{
//    $postsController = $container->make("postsController");
//    $postsController-> show();
//}

include __DIR__."/../views/layout/footer.php";

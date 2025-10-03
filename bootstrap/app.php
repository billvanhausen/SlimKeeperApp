<?php
    use DI\Container;
    use Slim\Factory\AppFactory;
    use Slim\Views\Twig;
    use Slim\Views\TwigMiddleware;
    require __DIR__ .'/../vendor/autoload.php';

//    $app = new Slim\App([
//        'settings' =>[
//            'displayErrorDetails'=>true
//        ]
//    ]);

// Create Container
$container = new Container();

// Set view in Container
$container->set(Twig::class, function() {
    return Twig::create(__DIR__ . '/../resources/views', ['cache' => false]);
});

// Create App from container
$app = AppFactory::createFromContainer($container);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $container->get(Twig::class)));

// Add other middleware
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);
<?php
/*
    use DI\Container;
    use Slim\Factory\AppFactory;
    use Slim\Views\Twig;
    use Slim\Views\TwigMiddleware;
require __DIR__ . '/../vendor/autoload.php';

// Create Container
$container = new Container();

// Set view in Container
$container->set(Twig::class, function() {
//    return Twig::create(__DIR__ . '/../templates', ['cache' => '/../cache']);
    return Twig::create(__DIR__ . '/../templates', ['cache' => false]);
});

// Create App from container
$app = AppFactory::createFromContainer($container);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $container->get(Twig::class)));

// Add other middleware
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

// Render from template file templates/profile.html.twig
$app->get('/hello/{name}', function ($request, $response, $args) {
    $viewData = [
        'name' => ucfirst( $args['name'] ),
    ];

    $twig = $this->get(Twig::class);

    return $twig->render($response, 'profile.html.twig', $viewData);
})->setName('profile');

// Render from string
$app->get('/hi/{name}', function ($request, $response, $args) {
    $viewData = [
        'name' => $args['name'],
    ];

    $twig = $this->get(Twig::class);
    $str = $twig->fetchFromString('<p>Hi, my name is {{ name }}.</p>', $viewData);
    $response->getBody()->write($str);

    return $response;
});

// Run app
$app->run();
*/

require '../bootstrap/container.php';
require '../bootstrap/app.php';
require '../routes/web.php';
$app->run();
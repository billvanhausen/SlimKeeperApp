<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

$app->get('/', function($request, $response, $args){
    $viewData = [];
    $twig = $this->get(Twig::class);

    return $twig->render($response, 'home.twig', $viewData);
})->setName('home');

// Render from template file templates/profile.html.twig
$app->get('/hello/{name}', function ($request, $response, $args) {
    $viewData = [
        'name' => ucfirst( $args['name'] ),
    ];
    $twig = $this->get(Twig::class);

    return $twig->render($response, 'profile.twig', $viewData);
})->setName('profile');
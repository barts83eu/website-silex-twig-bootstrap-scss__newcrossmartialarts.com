<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
$app['debug'] = true;





///////////////////////////// VIEWS definitions + routing

/// registering providers
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));





// > index
$app->get('/', function() use ($app){
  return $app['twig']->render('index.twig', array(
        'name' => 'nothing',
    ));
});

// > submit
$app->get('/submit', function() use ($app){
  return $app['twig']->render('submit.twig', array(
        'name' => 'submit',
    ));
});

// > carousel
$app->get('/carousel', function() use ($app){
  return $app['twig']->render('ui/carousel.twig', array(
        'name' => 'carousel',
    ));
});

// > carousel2 - swipe.js
$app->get('/carousel2', function() use ($app){
  return $app['twig']->render('ui/carousel2.twig', array(
        'name' => 'carousel2 swipe.js',
    ));
});

// > accordion
$app->get('/accordion', function() use ($app){
  return $app['twig']->render('ui/accordion.twig', array(
        'name' => 'accordion',
    ));
});

// > loader
$app->get('/loader', function() use ($app){
  return $app['twig']->render('ui/loader.twig', array(
        'name' => 'loader',
    ));
});


$app->get('/hello/{name}/', function ($name) use ($app) {
    return $app['twig']->render('index.twig', array(
        'name' => $name,
    ));
});




$app->run();

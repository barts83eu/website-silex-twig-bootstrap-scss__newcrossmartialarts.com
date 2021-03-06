<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
//$app['debug'] = true;





///////////////////////////// VIEWS definitions + routing

/// registering providers
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));





// > index
$app->get('/', function() use ($app){
  return $app['twig']->render('index.twig', array(
        'name' => 'index',
    ));
});

//  members
$app->get('/members', function() use ($app){
  return $app['twig']->render('members.twig', array(
        'name' => 'members',
    ));
});

// calendar
$app->get('/calendar', function() use ($app){
  return $app['twig']->render('calendar.twig', array(
        'name' => 'calednar',
    ));
});

// > map
$app->get('/map', function() use ($app){
  return $app['twig']->render('map.twig', array(
        'name' => 'map',
    ));
});

// > beginnercourse
$app->get('/beginnercourse', function() use ($app){
  return $app['twig']->render('beginnercourse.twig', array(
        'name' => 'map',
    ));
});

// > gallery
$app->get('/gallery', function() use ($app){ return $app['twig']->render('gallery.twig'); });

// > merchendise
$app->get('/merchandise', function() use ($app){ return $app['twig']->render('merchendise.twig'); });

// > randori
$app->get('/randori', function() use ($app){ return $app['twig']->render('randori.twig'); });



$app->run();

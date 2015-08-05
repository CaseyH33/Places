<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Places.php";

  session_start();

  if (empty($_SESSION['list_of_places'])) {
    $_SESSION['list_of_places'] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array (
    'twig.path' => __DIR__.'/../views'
  ));



  $app->get("/", function() use ($app) {
    return $app['twig']->render('places.html.twig', array('places' => Places::getAll()));
  });

  $app->post("/places", function() use ($app) {
    $place = new Places($_POST['place_name'], $_POST['length'], $_POST['reason'], $_POST['rating']);
    $place->save();
    return $app['twig']->render('create_place.html.twig', array('newplace' => $place));
  });

  $app->post("/delete_places", function() use ($app) {
    Places::deleteAll();
    return $app['twig']->render('delete_places.html.twig');
  });

return $app;
?>

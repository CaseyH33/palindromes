<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('input.html.twig');
    });

    $app->get("/true_false", function() use ($app) {
        $my_Palindrome = new Palindrome;
        $result = $my_Palindrome->test_Palindrome($_GET['input']);

        return $app['twig']->render('results.html.twig', array('result'=> $result));
    });

    return $app;
 ?>

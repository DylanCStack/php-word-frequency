<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render("input.html.twig", array("matches" => null, "input1"=>null, "input2"=>null));
    });

    $app->post("/results", function() use ($app) {
        $counter = new RepeatCounter;
        $result = $counter->CountRepeats($_POST['search_with'], $_POST['search_through']);
        return $app['twig']->render("results.html.twig",array("matches" => $result, "input1"=>$_POST['search_with'], "input2"=>$_POST['search_through']));
    });

    return $app;
?>

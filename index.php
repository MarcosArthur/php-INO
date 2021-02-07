<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$app = new Router("localhost/phpINO");

$app->namespace("Source\app\controllers");

$app->get("/", "WebController:index");

$app->post("/state", "WebController:state");

$app->dispatch();


if ($app->error()) {
    $app->redirect("/error/{$app->error()}");
}


<?php

use CoffeeCode\Router\Router;

$app = new Router(getenv("BASE_URL"));

$app->namespace("Source\App\controllers");

$app->get("/", "InoController:index");

$app->post("/state", "InoController:state");

$app->get("/error/{errocode}", "ErrosController:index");

$app->dispatch();


if ($app->error()) {
    $app->redirect("/error/{$app->error()}");
}
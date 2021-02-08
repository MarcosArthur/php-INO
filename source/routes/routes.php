<?php

use CoffeeCode\Router\Router;

$app = new Router(getenv("BASE_URL"));

$app->namespace("Source\app\controllers");

$app->get("/", "InoController:index");

$app->post("/state", "InoController:state");

$app->dispatch();


if ($app->error()) {
    $app->redirect("/error/{$app->error()}");
}
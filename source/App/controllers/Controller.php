<?php


namespace Source\App\controllers;

use League\Plates\Engine;

class Controller {
    
    public $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }
}
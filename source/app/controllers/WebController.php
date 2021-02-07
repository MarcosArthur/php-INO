<?php


namespace Source\app\controllers;


use League\Plates\Engine;

use Source\app\support\ConectionPort;

class WebController
{
    private $view;
    private $state;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    public function index() : void
    {
        echo $this->view->render("theme", []);
    }

    public function state() : void
    {
        $this->setState();

        $conection = new ConectionPort(getenv('PORT'));

        $conection->init();

        if ($conection->process($this->getState())) {
            echo json_encode(array(
                'sucess' => 'conection sucess ful'
            ));
            return;
        }


        echo json_encode(array('error' => "FATAL ERROR"));


    }

    private function setState() : void
    {
        $this->state = filter_input(INPUT_POST, "state", FILTER_SANITIZE_STRIPPED);
    }

    private function getState() : string
    {
        return $this->state;
    }

}
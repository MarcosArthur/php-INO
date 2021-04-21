<?php


namespace Source\App\controllers;

use Source\App\support\ConnectionPort;

class InoController extends Controller
{
   
    private $state;

    public function __construct()
    {
        parent::__construct();
    }

    public function index() : void
    {
        echo $this->view->render("theme", []);
    }

    public function state() : void
    {
        $this->setState();

        $connection = new ConnectionPort(getenv('PORT'));

        $connection->init();

        if ($connection->process($this->getState())) {
            echo json_encode(array(
                'sucess' => 'conection sucess full'
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
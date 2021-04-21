<?php

namespace Source\App\controllers;


class ErrosController extends Controller {

    public function index($data) : void {
        echo $this->view->render("error", ['erros' => $data]);
        // echo "Erro code {$data['errocode']}";
    }

}
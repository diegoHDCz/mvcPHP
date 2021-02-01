<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = 'Diego';
       $this->render('home', [
            'nome' => $nome,
            'idade' => 65,  
       ]);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}
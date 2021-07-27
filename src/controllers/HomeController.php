<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class HomeController extends Controller {

    //Lista todos os usuários e renderiza na view home, enviando os dados
    public function index() {
        $usuarios = Usuario::select()->execute();
                
        $this->render('home', ['usuarios' => $usuarios]);
    }

}
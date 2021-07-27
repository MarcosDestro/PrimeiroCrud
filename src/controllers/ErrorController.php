<?php
namespace src\controllers;

use \core\Controller;

class ErrorController extends Controller {
    
    //Se página não encontrada, renderize o view 404
    public function index() {
        $this->render('404');
    }

}
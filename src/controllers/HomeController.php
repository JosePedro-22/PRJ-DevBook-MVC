<?php
namespace src\controllers;

use \core\Controller;
use src\halpers\LoginHalper;

class HomeController extends Controller {

    private $loggerUser;

    public function __construct()
    {
        $this->loggerUser = new LoginHalper();
        $this->loggerUser->checkLogin();
        
        if($this->loggerUser === null)
            $this->redirect('/login');
    }

    public function index() {
        $this->render('home', ['nome' => 'Jose Pedro']);
        // $this->render('login');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}
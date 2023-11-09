<?php
namespace src\controllers;

use \core\Controller;
use src\halper\LoginHalper;

class HomeController extends Controller {

    private $loggerUser;

    public function __construct()
    {
        $this->loggerUser = LoginHalper::checkLogin();
        if($this->loggerUser === null)
            $this->redirect('/login');
    }

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}
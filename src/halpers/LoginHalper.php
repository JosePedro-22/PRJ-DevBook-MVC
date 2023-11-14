<?php
namespace src\halpers;
use \src\models\User;

class LoginHalper{
    public function checkLogin(){
        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();
            if(count($data) > 0)
            {
                $loggerUser = new User();
                $loggerUser->id = $data['id'];
                $loggerUser->email = $data['email'];
                $loggerUser->name = $data['name'];

                return $loggerUser;
            }
        }
        return false;
    }
}
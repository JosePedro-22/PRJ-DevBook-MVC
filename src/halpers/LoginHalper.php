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

    public function verifyLogin($email, $password){
        $user = User::select()->where('email', $email)->one();

        if($user) 
            if(password_verify($password, $user['password'])){
                $token = md5(time().rand(0,99999).time());
                
                User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                    ->execute();

                return $token;
            }
        return false;
    }
}
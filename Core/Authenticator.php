<?php

namespace Core;

class Authenticator{

    protected $db;

    public function __construct(){
        $this->db = App::resolve(Database::class);
    }
    
    public function attempt($email, $password){
        $user = $this->alreadyExist($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }

        return false;
    }

    public function alreadyExist($email){
        $user = $this->db->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find(); 

        return $user ? true : false;
    }
        
    public function login($user) {

        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function register($user) {
        if($this->alreadyExist($user['email'])) return false;
        
        $this->db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
            'email' => $user['email'],
            'password' => password_hash($user['password'], PASSWORD_BCRYPT),
        ]);

        $this->login($user);
        return true;
    }

    public function logout(){
        Session::destroy();
    }
}


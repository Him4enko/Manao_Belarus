<?php
require_once 'database.php';
require_once 'Users.php';
class Auth extends Users
{
    public function register($data)
    {
        if($data['password'] == $data['password_2']) {
            if (!Database::search($data['login'])) {
                $temp = [
                    'id' => Database::id(),
                    'login' => $data['login'],
                    'name' => $data['name'],
                    'password' => md5($data['password']),
                    'email' => $data['email']
                ];
                Database::insert($temp);
            }
        }
    }

    public function login($data)
    {
        $db = Database::get();
        if(Database::search($data['login'])) {
            foreach ($db['users'] as $key) {
                if($key['password'] == md5($data['password'])) {
                    // START SESSION
                }
            }
        }
    }
}
<?php
require_once('../model/User.php');

class UserService{

    public function createUser(string $email, 
    string $passwd,
    string $firstName,
    string $lastName,
    int $age){
        $firstName = ucwords(strtolower($firstName));
        $lastName = ucwords(strtolower($lastName));
        $user = new User($email, $passwd, $firstName, $lastName, $age);
        return $user;
    }

    public function addRole(User $admin, User $user, UserLevel $level){
        User::addRole($admin, $user, $level);
    }

    public function getName($type = 'full'){
        if($type == 'full'){//Előbb konstruktor átyírás, és statikus create, aztán itt azonosítás email alapján

        }
    }


}



?>
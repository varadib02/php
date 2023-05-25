<?php
require_once('../model/User.php');
session_start();

class UserService{

    public function createUser(string $email, 
    string $passwd,
    string $firstName,
    string $lastName,
    int $age){
        $firstName = ucwords(strtolower($firstName));
        $lastName = ucwords(strtolower($lastName));
        $user = User::createUser($email, $passwd, $firstName, $lastName, $age);
        return $user;
    }

    public function addRole(User $admin, User $user, UserLevel $level){
        User::addRole($admin, $user, $level);
    }

    public function login(string $email,string $passwd){
        $user=new User($email,$passwd);
        if($user->getEmail()==null)return false;
        $_SESSION['user']['email']=$user->getEmail();
        $_SESSION['user']['passwd']=$user->getPasswd();
        $_SESSION['user']['firstName']=$user->getFirstName();
        $_SESSION['user']['lastName']=$user->getLastName();
        $_SESSION['user']['age']=$user->getAge();
        $_SESSION['user']['level']=$user->getLevel();

    }

    public function getName($type = 'full'){
        if($type == 'full'){//Előbb konstruktor átírás, és statikus create, aztán itt azonosítás email alapján
            if(isset($_SESSION['user'])){
                return $_SESSION['user']['firstName']. ' ' . $_SESSION['user']['lastName'];
            }
            else{
                return $_SESSION['user']['firstName'];
            }
        }
    }


}



?>
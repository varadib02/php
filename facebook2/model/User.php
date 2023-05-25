<?php
require_once('UserLevel.php');
class User{

    private string $email;
    private string $passwd;
    private string $firstName;
    private string $lastName;
    private int $age;
    private UserLevel $level;

    public function __construct(string $email = null, string $passwd = null){

        $users = array(
            array(
                'email' => 'alma@korte.hu', 
                'passwd' => '5f5ea3800d9a62bc5a008759dbbece9cad5db58f', 
                'firstName' => 'Alma',
                'lastName' => 'Körte',
                'age' => 20, 
                'level' => UserLevel::ADMIN
            ),
            array(
                'email' => 'pityu@kiss.hu', 
                'passwd' => '305f5e4fdf696f1a406396d6958ca007c373e29a', 
                'firstName' => 'Pityu',
                'lastName' => 'Kiss',
                'age' => 30, 
                'level' => UserLevel::USER
            ),
            array(
                'email' => 'gipsz@jakab.hu', 
                'passwd' => 'ba790970d0fcf208a1a8e4bc9809b05cbaf3d920', 
                'firstName' => 'Jakab',
                'lastName' => 'Gipsz',
                'age' => 40, 
                'level' => UserLevel::GUEST
            )
        );
        for($i = 0; $i < count($users); $i++){
            $data = $users[$i];
            if($data['email'] == $email && $data['passwd'] == sha1($passwd)){
                
                    $this->email = $email;
                    $this->passwd = sha1($passwd); 
                    $this->firstName = $data['firstName'];
                    $this->lastName = $data['lastName'];
                    $this->age = $data['age'];
                    $this->level = $data['level'];
                break;
            }

        }
                                
    }

    public static function createUser(string $email, 
    string $passwd,
    string $firstName,
    string $lastName,
    int $age){
        $user = new User();
        $user->email = $email;
        $user->passwd = sha1($passwd);
        $user->firstName = $firstName;
        $user->lastName = $lastName;
        $user->age = 1;
        if(is_int($age) && $age > 0 && $age < 101){
            $user->age = $age;
        }
        $user->level = UserLevel::USER;
        return $user;
    }

    public function getEmail(){
        return $this->email;
    }

	public function getPasswd(): string {
		return $this->passwd;
	}
	
	public function setPasswd(string $passwd){
		$this->passwd = sha1($passwd);
	}

	public function getFirstName(): string {
		return $this->firstName;
	}

	public function setFirstName(string $firstName){
		$this->firstName = $firstName;
	}

    public function getAge(): int{
        return $this->age;
    }

    public function birthday(){
        $this->age++;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function setLastName(string $lastName){
        $this->lastName = $lastName;
    }

    public static function addRole(User $admin, User $user, UserLevel $level){
        if($admin->level == UserLevel::ADMIN &&
        $user->level != UserLevel::ADMIN){
            $user->level = $level;
            return true;
        }
        return false;
    }

    public function getLevel(): string{
        return $this->level->name;
    }

    public function getName(){
        return $this->firstName . ' ' . $this->lastName;
    }
}



?>
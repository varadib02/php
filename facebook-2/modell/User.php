<?php 

require_once("UserLevel.php");
session_start();

class User {
    private string $email;
    private string $passwd;
    private string $firstName;
    private string $lastName;
    private int $age;
    private UserLevel $level;

    public function __construct(string $email, string $passwd) {
        $users = array(
            array(
                "email" => "alma@korte.hu", 
                "passwd" => "5f5ea3800d9a62bc5a008759dbbece9cad5db58f", 
                "firstName" => "Alma", 
                "lastName" => "Körte", 
                "age" => 20, 
                "level" => UserLevel::ADMIN
            ),
            array(
                "email" => "pityu@kis.hu", 
                "passwd" => "305f5e4fdf696f1a406396d6958ca007c373e29a", 
                "firstName" => "Pityu", 
                "lastName" => "Kis", 
                "age" => 30, 
                "level" => UserLevel::USER
            ),
            array(
                "email" => "masik@pelda.hu",
                "passwd" => "d623c430b633bb8c5387bb5cefaad42b97fd3e01",
                "firstName" => "Masik",
                "lastName" => "Pelda",
                "age" => 25,
                "level" => UserLevel::ADMIN
            )
        );

        for ($i = 0; $i < count($users); $i++) { 
            
            $data = $users[$i];
            
            if ($data["email"] == $email && $data["passwd"] == sha1($passwd)) {
                
                $this -> passwd = sha1($passwd); 
                $this -> email = $email;
                $this -> lastName = $data["lastName"]; 
                $this -> firstName = $data["firstName"]; 
                $this -> age = $data["age"];

                break;    
            }
        }
    }

    public static function createUser(string $email, string $passwd, string $firstName, string $lastName, int $age): User {
        $user = new User();
        $user -> email = $email;
        $user -> passwd = sha1($passwd);
        $user -> lastName = $lastName;
        $user -> age = 1;
        
        if (is_int($age) && $age > 0 && $age < 101) {
            $user -> age = $age;
        }

        $user -> level = UserLevel::USER;

        return $user;
    }
    
    public function adat(): void {
        print 
        "Email cím: " . $this -> email . "<br>" .
        "Jelszó: " . $this -> passwd . "<br>" .
        "Teljes név: " . $this -> getName() . "<br>" .
        "Kor: " . $this -> age . "<br>" .
        "Rang: " . $this -> level . "<br>";
    }
    
	public function getEmail(): string {
		return $this->email;
	}

	public function setPasswd(string $passwd): void {
		$this -> passwd = sha1($passwd);
	}

    public function getFirstName(): string {
		return $this->firstName;
	}

    public function setFirstName(string $firstName): void {
		// $this->firstName = ucfirst(strtolower($firstName));
	}

    public function getLastName(): string {
		return $this->lastName;
	}

    public function setLastName(string $lastName): void {
		// $this -> lastName = ucfirst(strtolower($lastName));
	}
    public function getPasswd(): string {
		return $this -> passwd;
	}

	public function getAge(): int {
		return $this -> age;
	}

	public function birthday(): void {
		$this -> age++;
	}

    public static function addRole(User $admin, User $user, UserLevel $level): bool {
        // Egy User-re hívjuk meg
        // ADMIN ADMIN-tól nem vehet el jogot!
        if ($admin -> level == UserLevel::ADMIN && $user -> level != UserLevel::ADMIN) {
            $user -> level = $level;
            return true;
        }else {
            return false;
        }
    }

    public function getLevel(): UserLevel {
        return $this -> level;
    }

    public function getName(): void {
        $this -> firstName . " " . $this -> lastName;
    }
}

?>
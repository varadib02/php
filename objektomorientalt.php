<?php 
class Kutya{
    public string $nev;
    private int $kor;
    public bool $him;
    public string $vercsoport;

    public function __construct(){
        $this->kor=0;
    }

    public function getKor(){
        return $this->kor;
    }
    public function szulinap(){
        return $this->kor++;
    }
}

$bodri = new Kutya();
$bodri->nev = 'Bodrika';
//$bodri->kor = 6;

$zsuli = new Kutya();
$zsuli->nev = 'Zsülike';
//$zsuli->kor = 5;
print $zsuli->nev.",".$zsuli->getKor()."<br/>";
//$zsuli->kor=2;
$zsuli->szulinap();
print $zsuli->nev.", ".$zsuli->getKor();
?>
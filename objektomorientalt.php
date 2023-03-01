<?php 
require_once('vercsoport.php');
class Kutya{
    private string $nev;
    private int $kor;
    private bool $him;
    private Vercsoport $vercsoport;

    public function __construct(int $ujKor=0,string $ujNev='Új Kutya',bool|NULL $isHim=null,Vercsoport $ujVcs=null){
        $this->kor=$ujKor;
        $this->nev=$ujNev;
        if($isHim==null){
            $this->him=(bool)rand(0,1);
        }
        else {
            $this->him=$isHim;
        }
        if($ujVcs==null){
            $this->vercsoport=new Vercsoport();
        }
        else{
        $this->vercsoport=$ujVcs;
        }
    }
    public function getNev(){
        return $this->nev;
    }

    public function setNev(string $ujNev){
        $this->nev=$ujNev;
    }

    public function getKor(){
        return $this->kor;
    }
    public function szulinap(){
        return $this->kor++;
    }
    public function isHim(){
        return $this->him;
    }
    public function vercsoportTeszt(string $vcs){
        if($this->vercsoport==$vcs){
            return $this->vercsoport;
        }
        return false;
    }
    public function parosodik(Kutya $masik){
        if($this->him==$masik->him){
            return false;
        }
        $utod= new Kutya();
        $utod->kor= 0;
        $utod->nev= 'Kiskutya';
        $utod->him= (bool)rand(0,1);
        $utod->vercsoport= $this->vercsoport;
    }
}

$bodri = new Kutya();
$bodri->setNev('Bodrika');
//$bodri->kor = 6;

$zsuli = new Kutya();
$zsuli->setNev('Zsülike');
//$zsuli->kor = 5;
print $zsuli->getNev().",".$zsuli->getKor()."<br/>";
//$zsuli->kor=2;
$zsuli->szulinap();
print $zsuli->getNev().", ".$zsuli->getKor()."<br/>";


$vcs=new Vercsoport();
$vcs->setToDEA4();
$menhelyi=new Kutya(3,"Tekergő",true,$vcs);
print $menhelyi->getNev()."<br/>";
print $menhelyi->vercsoportTeszt('DEA1')."<br/>";
?>
<?php

class ablak{
    public string $nev;
    private string $szin;
    public int $magasag;
    public int $szelesseg;
    public int $ar;
    public int $ido;
    private bool $raktaron;
    public int $meret;

    public function __construct(
        string $ujNev='Új ablak',
        string $ujSzin='Új Szín',
        int $ujMagassag=0,
        int $ujSzelesseg=0,
        int $ujAr=0,
        bool $ujraktaron=true,
        int $ujmeret=0)
    {
        $this->nev=$ujNev;
        $this->szin=$ujSzin;
        $this->magasag=$ujMagassag;
        $this->szelesseg=$ujSzelesseg;
        $this->ar=$ujAr;
        $this->raktaron=$ujraktaron;
        $this->meret=$ujmeret;
    }
    public function getszin(){
        return $this->szin;
    }
    public function setnev(int $ujnev){
        $this->nev=$ujnev;
    }
    public function getnev(){
        return $this->nev;
    }
    public function arvaltozas(int $ujAr){
        if($ujAr>=0){
            $this->ar=$ujAr;
        }
    }
    public static function meretadas(int $m,int $sz)
    {
        return $meret=($m+$sz)*2;
    }


}
$feherablak=new ablak();
print $feherablak->getszin();

$feherablak->arvaltozas(100);

$feherablak->setnev("feher ablak");
print $feherablak->getnev();
print $feherablak->meretadas($feherablak->magasag,$feherablak->szelesseg);

?>
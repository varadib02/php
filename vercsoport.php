<?php

class Vercsoport{
    private string $ertek;

    public function __construct()
    {
        $this->ertek='';
    }
    public function setToDEA1(){
     $this->ertek='DEA1';       
    }
    public function setToDEA1_1(){
        $this->ertek='DEA1.1';       
    }
    public function setToDEA4(){
        $this->ertek='DEA4';       
    }
    public function setToDAL(){
        $this->ertek='DAL';       
    }
}

?>
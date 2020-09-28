<?php

namespace App\Database;
class Singleton
{
    private $connexion=null;
    private function __construct(){}

    protected function  getConnexion(){
        if($this->connexion==null){
            $conn=new Connexion();
            $this->connexion=$conn->getConnexion();
        }

        return $this->connexion;
    }
}


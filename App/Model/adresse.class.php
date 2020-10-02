<?php

namespace App\Model;

use App\Database\Singleton;
use PDOException;

class Adresse extends Singleton
{
    private $id;
    private $id_user;
    private $adresse;
    private $ville;
    private $pays;
    private $codePostal;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }


    /**
     * fonction permettant d'ajouter une adresse dans la base de donnee
     */

     public function addAdresse(){
        $conn = parent::getConnexion();
        try{
            $rep=$conn->prepare("insert into adresse (id_user,adresse,ville,pays,codePostal) values(?,?,?,?,?)");
            $rep->execute([
                $this->id_user,$this->adresse,$this->ville,$this->pays,$this->codePostal
            ]);
            if($rep){
                return true;
            }else{
                return false;
            }
        }catch(\PDOException $e){
            die("Erreur => ".$e);
        }
     }

     /**
      * fonction permettant de rechercher une adresse
      */
      public function searchAdresse(){
        $conn = parent::getConnexion();
        try{
            $req=$conn->prepare("select * from adresse where adresse=? and ville=? and pays=? and codePostal=? LIMIT 1");
            $req->execute([
                $this->adresse,$this->ville,$this->pays,$this->codePostal
            ]);
            if($req AND $req->rowCount()==1){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            die("Error =>".$e);
        }
      }
}

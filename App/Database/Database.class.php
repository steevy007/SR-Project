<?php

namespace App\Database;

use PDOException;

class Connexion
{
    const username = 'root';
    const password = '';
    private $connexion = null;

    public function __construct()
    {
        try {
            $this->connexion = new \PDO('mysql:host=localhost;dbname=sr', SELF::username, SELF::password);

            $this->connexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo ('Error => ' . $e);
        }
    }

    /**
     * Get the value of connexion
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    /**
     * Set the value of connexion
     *
     * @return  self
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;

        return $this;
    }
}

//new Connexion();


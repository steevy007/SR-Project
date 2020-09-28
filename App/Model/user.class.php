<?php

namespace App\Model;

use App\Database\Singleton;

class User extends Singleton
{
    private $id;
    private $code_user;
    private $password;
    private $created_at;


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
    // …
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
     * Get the value of code_user
     */
    public function getCode_user()
    {
        return $this->code_user;
    }

    /**
     * Set the value of code_user
     *
     * @return  self
     */
    public function setCode_user($code_user)
    {
        $this->code_user = $code_user;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Methode Permettant de se connecter
     */

    public function Connecter($code, $psw)
    {
        $conn = parent::getConnexion();
        $message = '';
        try {
            //recherche code existant
            $req = $conn->prepare("Select code from users where code=? Limit 1");
            $req->execute([$code]);
            if ($req->rowCount() == 1) {

                $req = $conn->prepare("Select password from users where code=? Limit 1");
                $req->execute([$code]);
                if ($req->rowCount() == 1) {

                    $pass = $req->fetch(\PDO::FETCH_OBJ);
                    //echo $pass->password;


                    if (password_verify($psw, $pass->password) == 1) {
                        session_start();
                        $_SESSION['identifiant']=$code;
                        $message = 'succes';
                    } else {
                        $message = 'Password Incorrect';
                    }
                }
            } else {
                $message = 'Code Introuvable';
            }
        } catch (\PDOException $e) {
            die('Error =>' . $e);
        }
        return $message;
    }
}

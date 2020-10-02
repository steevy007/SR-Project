<?php
session_start();
require_once '../../vendor/autoload.php';

use App\Model\Adresse;

$message = '';
if ($_POST) {
    // htmlspecialchars($_POST);
    extract($_POST);
    if (empty($adresse) or empty($ville) or empty($pays) or empty($cp)) {
        $message = 'Veuillez Remplir Correctement Tous Les Champ';
    } else if (strlen($adresse) < 3 or strlen($ville) < 3 or strlen($pays) < 3 or strlen($cp)<3) {
     $message = 'Les Champs doit contenir au maximum plus de trois caractere';
    } else {
        
        $adresse = new Adresse([
            'id' => 0,
            'id_user' => $_SESSION['id'],
            'adresse' => $adresse,
            'ville' => $ville,
            'pays' => $pays,
            'codePostal' => $cp
        ]);

        if ($adresse->addAdresse()) {

            $message = 'succes';
        }
    }


    //echo $_POST;
}

echo $message;

<?php
require_once 'vendor/autoload.php';
use App\Model\Adresse;
$adresse=new Adresse([
    'id'=>0,
    'id_user'=>1,
    'adresse'=>'Delmas',
    'ville'=>'ville',
    'pays'=>'Haiti',
    'codePostal'=>'Code Postal'
]);

$req=$adresse->listAdresse();
while($data=$req->fetch(PDO::FETCH_OBJ)){
    echo $data->id;
}
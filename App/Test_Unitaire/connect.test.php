<?php
require_once 'vendor/autoload.php';
use App\Database\Singleton;
use App\Model\User;
$var=new User([
    'id'=>0,
    'code_user'=>'',
    'password'=>'',
    'created_at'=>''
]);

echo $var->Connecter('SR2020','SR2020');
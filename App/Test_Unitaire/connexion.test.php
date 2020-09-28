<?php
require_once 'vendor/autoload.php';
use App\Database\Singleton;
//A noter que les methode sont public que pour les test
 $var=new Singleton();

 $var->getConnexion();
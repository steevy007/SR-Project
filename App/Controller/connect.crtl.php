<?php
require_once '../../vendor/autoload.php';
use App\Model\User;
if($_POST){
   extract($_POST);
   $message='';
   if(empty($code) OR empty($psw)){
    $message='***Veuillez Remplir tout les champ';
   }else if(strlen($psw)<4){
    $message='Passsword Invalide';
   }else{
       $user=new User([
           'id'=>0,
           'code_user'=>$code,
           'password'=>$psw,
           'created_at'=>''
       ]);

       $message=$user->Connecter($code,$psw);
   }
   echo $message;
}
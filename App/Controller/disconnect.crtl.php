<?php
session_start();
$_SESSION['identifiant'] = [];
session_destroy();
header('Location:../../View/Home.view.php');

/*require_once '../../vendor/autoload.php';
use App\Model\User;
User::Disconnect();*/
<?php
require('connexiondb.php');

$emailUser = $_SESSION['email'];
$_SESSION['status'];

if($_SESSION['status'] == "apprenant") {
    
    $infosUser = $bd -> prepare('SELECT * FROM apprenant WHERE emailappr = ?');
    $infosUser-> execute(array($emailUser));
    
     $dataUser  = $infosUser->fetch();
    
     $nomUser = $dataUser['nomappr'];
     $prenomUser = $dataUser['prenomappr'];
}

if($_SESSION['status'] == "caoch") {
    $infosUser = $bd -> prepare('SELECT * FROM coach WHERE emailcoach = ?');
    $infosUser-> execute(array($emailUser));
    
     $dataUser  = $infosUser->fetch();
    
     $nomUser = $dataUser['nomcoach'];
     $prenomUser = $dataUser['prenomcoach'];
     
}


<?php 
try {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $bd = new PDO('mysql:host=localhost;dbname=coursbcamp;charset=utf8', 'root', '');
    // echo "connexion réussie";   
} catch (Exception $e) {
    die("Une erreur a été trouvée  : " . $e -> getMessage());
}
?>
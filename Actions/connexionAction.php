<?php 
require('connexiondb.php');

if(isset($_POST['connexion'])) {
    if(!empty($_POST['email']) AND !empty($_POST['password'])) {

        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);

        $IfUserExist = $bd->prepare('SELECT * FROM users WHERE emailUser = ?');
        $IfUserExist -> execute(array($email));

        $infosUser = $IfUserExist->fetch();

        if($IfUserExist -> rowCount() > 0) {

            // #################################### RECUP APPRENANT ################################################

            $_SESSION['auth'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $infosUser['idUser'];
            $_SESSION['status'] = $infosUser['statusUser'];

            if($_SESSION['status'] == "caoch" OR $_SESSION['status'] == "apprenant") {
                header('Location: dasbhord.php');
            } elseif ($_SESSION['status'] == "admin") {
                header('Location: dasbhordAbmin.php');
            }

        } else {
            $errorMsg = "Veuillez verifier votre password ou email";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs";
    }
}
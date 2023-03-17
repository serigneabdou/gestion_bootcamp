<?php 
// ############################################ CONNEXION BD ###################################################
require('Actions/securityAction.php');
include ('connexiondb.php'); 

// ############################### AJOUTER UN APPRENANT #############################################################
if(isset($_POST['valider']))
    if(!empty($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']); 
        $nom = htmlspecialchars($_POST['nom']) ;
        $adress = htmlspecialchars($_POST['adress']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $status = "apprenant";
   

        $userExist = $bd -> prepare('SELECT emailappr FROM apprenant WHERE emailappr = ? ');
        $userExist -> execute(array($email));


        if($userExist -> rowCount() == 0) {
            
            $insertApprenant = $bd -> prepare('INSERT INTO apprenant(prenomappr ,nomappr ,adresseappr ,emailappr,telephoneappr) VALUES (?,?,?,?,?);');
            $insertApprenant->execute(array($prenom,$nom,$adress,$email,$tel));

            $insertUser = $bd -> prepare('INSERT INTO users(emailUser , telUser, statusUser)VALUES(? , ? , ?);');
            $insertUser->execute(array($email , $tel , $status));

            $msgSucces = "Apprenant ajouté";                                                                

        } else {
            $msgError = "L'apprenant est déjà inscript à ce programmme .";
        }


    } else {
        $msgError = "Vieullez remplire tous les champs...";
    }

?>
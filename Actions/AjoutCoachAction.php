<?php 
// ############################################ CONNEXION BD ###################################################
include ('connexiondb.php'); 

// ############################### AJOUTER UN COACH #############################################################
if(isset($_POST['valider']))
    if(!empty($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']); 
        $nom = htmlspecialchars($_POST['nom']) ;
        $adress = htmlspecialchars($_POST['adress']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $specialite = htmlspecialchars($_POST['specialite']);
        $status = "caoch";

        $userExist = $bd -> prepare('SELECT emailcoach FROM coach WHERE emailcoach = ? ');
        $userExist -> execute(array($email));


        if($userExist -> rowCount() == 0) {
            
            $insertApprenant = $bd -> prepare('INSERT INTO coach(prenomcoach ,nomcoach ,adressecoach ,emailcoach,telephonecoach, specialite) VALUES (?,?,?,?,?,?);');
            $insertApprenant->execute(array($prenom,$nom,$adress,$email,$tel,$specialite));

            $insertUser = $bd -> prepare('INSERT INTO users(emailUser , telUser, statusUser)VALUES(? , ? , ?);');
            $insertUser->execute(array($email , $tel , $status));

            $msgSucces = "coach ajouté";       


        } else {
            $msgError = "Le coach est déjà inscript";
        }
    } else {
        $msgError = "Vieullez remplire tous les champs...";
    }

?>
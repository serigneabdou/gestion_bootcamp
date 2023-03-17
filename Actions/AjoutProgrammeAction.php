<?php 
// ############################################ CONNEXION BD ###################################################
include ('connexiondb.php'); 

// ############################### AJOUTER UN COACH #############################################################
if(isset($_POST['valider']))
   
 if(!empty($_POST['titre']) AND !empty($_POST['description'])
      AND !empty($_POST['domaine'])
   
      ){
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $domaine = htmlspecialchars($_POST['domaine']);;
    $insert = $bd -> prepare('INSERT INTO programme(titre ,description, domaine) VALUES (?,?,?);');
    $insert->execute(array($titre,$description,$domaine));
    $msgSucces = "le programme s'est bel et bien insere";
   
   
 }
 else{
   $msgError = "Vieullez saisir tous les champs...";

 }
?>


<!-- // $req = $db->query('SELECT .........');
while($data = $req->fetch()){
  echo $data['fichier']. ':' .'<a href = "'.$data['file_url'].'">telecharger</a>';

} -->

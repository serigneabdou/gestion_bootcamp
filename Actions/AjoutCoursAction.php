<?php 
// ############################################ CONNEXION BD ###################################################
include ('connexiondb.php'); 

// ############################### AJOUTER UN COACH #############################################################
if(isset($_POST['valider']))
   
 if(!empty($_POST['titre']) AND !empty($_POST['duree'])
      AND !empty($_POST['description'])
      AND !empty($_POST['url'])
      // AND !empty($_POST['fichier'])
      AND !empty($_POST['coach'])
      AND !empty($_POST['programme'])
      AND !empty($_FILES)
      ){
    $titre = htmlspecialchars($_POST['titre']);
    $duree = htmlspecialchars($_POST['duree']);
    $descrition = htmlspecialchars($_POST['description']);
    $url = htmlspecialchars($_POST['url']);
    // $fichier = htmlspecialchars($_POST['fichier']);
    $coach = htmlspecialchars($_POST['coach']);
    $programme = htmlspecialchars($_POST['programme']);
    $file_name = $_FILES['fichier']['name'];
    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $file_extension = strchr($file_name , ".");
    $extensions_autorisees = array('.pdf', '.PDF');
    $file_dest = 'files/'.$file_name;
    if(in_array($file_extension, $extensions_autorisees)){
      if(move_uploaded_file($file_tmp_name, $file_dest)){
        // echo 'fichier envoie avec succes'           
          $insert = $bd -> prepare('INSERT INTO cours(libelle  ,detail  ,urlvideo ,fichier ,dure ,idcoach ,numprogramme) VALUES (?,?,?,?,?,?,?);');
          $insert->execute(array($titre,$descrition,$url,$file_dest,$duree, $coach,$programme, ));
          $msgSucces = "le cours s'est bel et bien insere";  
      }else{
        echo 'une erreur est survenu lors de l\'envoi';
      }
    }
    else{
      echo 'seul les fichier pdf sont autoerises';
    }
 }
 else{
   $msgError = "Vieullez saisir tous les champs...";

 }
?>


<!-- // $req = $db->query('SELECT .........');
while($data = $req->fetch()){
  echo $data['fichier']. ':' .'<a href = "'.$data['file_url'].'">telecharger</a>';

} -->

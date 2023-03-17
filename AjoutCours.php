<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('Includes/head.php'); ?>
    <?php include ('Actions/AjoutCoursAction.php'); ?>
    <title>ajout cours</title>
    <link rel="stylesheet" href="./Assets/style/ajoutCours.css">
</head>
<body>
<?php include ('Includes/Navbar.php'); ?>
        <div class="container-body">
            <div class="container_card">
                <div class="container_logo">
                    <img src="Assets/image/cours.png" alt="LOGO" class="logo_connexion">
                </div>
                <?php if(isset($_POST['valider'])) {
                    if(isset($msgSucces)) { echo '<h5 class="alert alert-success ">'.$msgSucces.'</h5>';}
                    if(isset($msgError)) { echo '<h5 class="aert alert-danger ">'.$msgError.'</h5>' ;}
                    }
                    ?>
               
                    <h4 class="titre-ajout ">Ajoutez un Cours</h4>
                    <form  method="POST" enctype="multipart/form-data">
                    <div class="">
                        <input type="text" name="titre" placeholder="Titre du Cours" class="input">
                    </div>
                    <div class="">
                        <input type="number" name="duree" placeholder="Duree du Cours" class="input">
                    </div>
                    
                    <div class="">
                        <input type="text" name="url" placeholder="Url du video" class="input">
                    </div>
                    <div class="">
                        <input type="file" name="fichier" placeholder="Selectionner un fichier" class="input">
                    </div>
                    <div class="">
                        <select name="coach" id="coach" class="form-select input">
                            <option value="">Selectionnez votre coach</option>
                            <?php 
                            include ('connexiondb.php'); 
                            $requete = 'SELECT  * FROM coach ';
                            $result = $bd->query($requete);
                        while($line = $result-> fetch()){
                            echo "<option value = '$line[0]'>$line[1]</option>";
                        }
                            ?>
                        </select>
                    </div>
                    <div class="">
                        <select name="programme" id="programme" class="form-select input">
                            <option value="1">Selectionnez votre programme</option>
                            <?php 
                            include ('connexiondb.php'); 
                            $requete = 'SELECT  * FROM programme';
                            $result = $bd->query($requete);
                            while($line = $result-> fetch()){
                                echo "<option value = '$line[0]'>$line[1]</option>";
                        }
                            ?>
                        </select>
                    </div>
                    <div class="">
                        <textarea  placeholder = "Description Cours" class="textarea" name="description">

                        </textarea>
                    </div>
                    
                    <button class="btn_connexion" type="submit" name="valider" style="width:100%;margin-top:10px">Ajouter</button>

                    </form>
                    
            </div>
       
        </div>
    <!-- </div> -->
</body>
</html>
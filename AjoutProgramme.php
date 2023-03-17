<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('Includes/head.php'); ?>
    <?php include ('ActionS/AjoutProgrammeAction.php'); ?>
    <title>ajout programme</title>
    <link rel="stylesheet" href="./Assets/style/ajoutProgramme.css">
</head>
<body>
<?php include ('Includes/Navbar.php'); ?>
        <div class="container-body">
            <div class="container_card">
                <div class="container_logos">
                    <img src="Assets/image/programme.png" alt="LOGO" class="logo_connexion">
                </div>
                <?php if(isset($_POST['valider'])) {
                    if(isset($msgSucces)) { echo '<h5 class="alert alert-success ">'.$msgSucces.'</h5>';}
                    if(isset($msgError)) { echo '<h5 class="aert alert-danger ">'.$msgError.'</h5>' ;}
                    }
                    ?>
               
                    <h4 class="titre-ajout ">Ajoutez un Programme</h4>
                    <form  method="POST" enctype="multipart/form-data">
                    <div class="">
                        <input type="text" name="titre" placeholder="Titre du programme" class="input">
                    </div>
                  
                    <div class="">
                        <input type="text" name="domaine" placeholder="domaine du programme" class="input">
                    </div>
                    <div class="">
                        <textarea  placeholder = "Description Cours" class="textarea" name="description">
                        </textarea>
                    </div>

                    <button class="btn_connexion" type="submit" name="valider" style="width:100%;margin-top:20px">Ajouter</button>

                    </form>
                    
            </div>
       
        </div>
    <!-- </div> -->
</body>
</html>
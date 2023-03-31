<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('Includes/head.php'); ?>
    <?php include ('Actions/AjoutApprAction.php'); ?>
    <link rel="stylesheet" href="./Assets/style/ajoutCoach.css">
    <!-- <link rel="stylesheet" href="./Assets/style/ajoutApprenant.css"> -->
</head>
<body>
<?php include ('Includes/Navbar.php'); ?>
<!--==================TEST==========================-->
<div class="container-body main">
            <div class="container-card">
                <div class="conteneur_img">
                     <img src="Assets/image/header-img.png" alt="profil-header" class="ajoutApprenant-img">
                 </div>
                 <?php if(isset($_POST['valider'])) {
                        if(isset($msgSucces)) { echo '<p class="alert alert-success">'.$msgSucces.'</p>';}
                        if(isset($msgError)) { echo '<p class="alert alert-danger w-100">'.$msgError.'</p>' ;}
                        }
                        ?>
                         <h1 class="titleCoach">Ajouter un Apprenant</h1>
                 <form action="AjoutCoach.php" method="POST">
                        <div class="">
                            <input type="text" name='prenom' placeholder="Prenom" class="input"/>
                        </div>
                        <div class="">
                            <input type="text" name='nom' placeholder="Nom" class="input"/>
                        </div>
                        <div class="">
                            <input type="text" name='adress' placeholder="Adresse" class="input"/>
                        </div>
                        <div class="">
                            <input type="email" name='email' placeholder="Email" class="input"/>
                        </div>
                        <div class="">
                            <input type="tel" name='tel' placeholder="Numéro Téléphone" class="input"/>
                        </div>
                        
                        <button type="submit" name="valider" class="btn-valider">Ajouter</button>
                 </form>
            </div>
       </div>
    <!--==================TEST==========================-->
<!--<div class="container_form main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 section_left">
                <div class="">
                    <h1 class="text-white titre">Ajouter un apprenant</h1>
                    <form action="AjoutApprenant.php" method="POST">
                      

                        <div class="row mb-3 ligne-row">
                            <div class="col-md-6">
                                <div class="form-floating me-2">
                                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                                    <label for="prenom">Prénom</label>
                                </div>   
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                                    <label for="nom">Nom</label>
                                </div> 
                            </div>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="adress" placeholder="Adress">
                            <label for="adress">Adress</label>
                        </div> 
    
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <label for="email">Email</label>
                        </div> 
    
                        <div class="form-floating mb-3 w-100">
                            <input type="tel" class="form-control" name="tel" placeholder="Tel">
                            <label for="tel">Téléphone</label>
                        </div> 
                        
                        <button type="submit" name="valider" class="btn_valider">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="conteneur_img">
                    <img src="Assets/image/header-img.png" alt="profil-header" class="">
                </div>
            </div>
        </div>
    </div>
</div> -->
</body>
</html>
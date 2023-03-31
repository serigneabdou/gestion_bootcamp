
<?php include ('Actions/AjoutCoachAction.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('Includes/head.php'); ?>
    <!-- <link rel="stylesheet" href="./Assets/style/ajoutCours.css"> -->
    <link rel="stylesheet" href="./Assets/style/listApprenant.css" >
    <style>
        .main {
    position: relative;
    top: 90px;
    }

    .btn_valider {
    all: unset;
    background-color: white;
    /* color: ; */
    padding: 15px 70px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 1.1rem;
}
    </style>
</head>
<body>
    <?php include ('Includes/Navbar.php'); ?>
        <div class="container_form main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 section_left">
                        <div class="">
                            <h1 class="text-white titre">Ajouter un coach</h1>
                            <form action="AjoutCoach.php" method="POST">
                                <?php if(isset($_POST['valider'])) {
                                if(isset($msgSucces)) { echo '<h4 class="text-success">'.$msgSucces.'</h4>';}
                                if(isset($msgError)) { echo '<h4 class="text-danger w-100">'.$msgError.'</h4>' ;}
                                }
                                ?>
        
                                <div class="row mb-3 ligne-row">
                                    <div class="col-md-6">
                                        <div class="form-floating me-2">
                                            <input type="text" class="form-control"   name="prenom" placeholder="Prénom">
                                            <label for="prenom">Prénom</label>
                                        </div>   
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control"  name="nom" placeholder="Nom">
                                            <label for="nom">Nom</label>
                                        </div> 
                                    </div>
                                </div>
            
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"  name="adress" placeholder="Adress">
                                    <label for="adress">Adress</label>
                                </div> 
            
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control"  name="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div> 
            
                                <div class="form-floating mb-3 w-100">
                                    <input type="tel" class="form-control" name="tel" placeholder="Tel">
                                    <label for="tel">Téléphone</label>
                                </div> 
                                <div class="form-floating mb-3 w-100">
                                    <input type="specialite" class="form-control" name="specialite" placeholder="specialite">
                                    <label for="specialite">Specialite</label>
                                </div>
                                <div class="form-floating mb-3 w-100">
                                    <button type="submit" name="valider" class="btn_valider">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="conteneur_img">
                            <img src="Assets/image/prof.png" alt="profil-header" class="">
                        </div>
                    </div>
                </div>
            </div>
       
        </div>

</body>
</html>
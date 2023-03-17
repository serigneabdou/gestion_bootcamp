
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ('Includes/head.php'); ?>
    <?php include ('Actions/AjoutCoursAction.php'); ?>
    <title>ajout cours</title>
    <link rel="stylesheet" href="./Assets/style/ajoutCours.css">
    <style>
        body{
            background-color: gray;
        }
        .formulaire{
            display: flex;
            justify-content: center;
            align-items: center;
        } 
        
    </style>
</head>
<body>
    <div class="container mt-5  ">
            <form class="formulaire" method="POST" enctype="multipart/form-data">
                <div class="row">
                <?php if(isset($_POST['valider'])) {
                    if(isset($msgSucces)) { echo '<h4 class="alert alert-success">'.$msgSucces.'</h4>';}
                    if(isset($msgError)) { echo '<h4 class="aert alert-danger w-100">'.$msgError.'</h4>' ;}
                    }
                    ?>
               <h2>ajouter un cours</h2>
           <div class="col-md-6 p-2">
                <div class="form-floating">
                    <input type="text" class="form-control" name="titre" placeholder="Titre du Cours">
                    <label for="titre">Titre du Cours</label>
                </div> 
            </div>
            <div class="col-md-6 p-2">
                <div class="form-floating">
                    <input type="number" class="form-control" name="duree" placeholder="duree">
                    <label for="duree">Duree du Cours</label>
                </div> 
            </div>
           <div class="col-md-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="description" name="description"></textarea>
                    <label for="description">Description du Cours</label>
                </div>
           </div>
            <div class="col-md-6 p-2">
                <div class="form-floating">
                    <input type="text" class="form-control" name="url" placeholder="">
                    <label for="url">Url du video</label>
                </div> 
            </div>
            <div class="col-md-6 p-2">
                <div class="form-floating">
                    <input type="file" class="form-control" name="fichier" placeholder="fichier ">
                    <label for="fichier" class="p-2">Fichier</label>
                </div> 
            </div>
            <div class="col-md-6 p-2">
                    <select name="coach" id="coach" class="form-select">
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
            <div class="col-md-6 p-2">
                    <select name="programme" id="programme" class="form-select">
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
            

            <div class="col-md-12">
               <button type="submit" name="valider" class="btn btn-success form-control">Enregistrer</button>
             </div>
           </div>
            </form>

        
    </div>

    <br><br><br>

 
   
    
</body>
</html>
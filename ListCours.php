<?php require('Actions/securityAction.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <?php include ('Includes/head.php'); ?>
        <link rel= "stylesheet" href="./Assets/style/listcoach.css">
        
    <style>
        

body {
    color: #404E67;
    background: rgba(0, 0, 0, 0.5);
    font-family: 'Open Sans', sans-serif;
}

.parant-list{
    margin-top: 85px;
}
.card-list{
    background-color: #fff;
    border-radius: 10px;
    height: 400px;
    padding: 20px;
    position:relative;
    margin: 20px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, 
                rgba(0, 0, 0, 0.12) 0px -12px 30px, 
                rgba(0, 0, 0, 0.12) 0px 4px 6px, 
                rgba(0, 0, 0, 0.17) 0px 12px 13px, 
                rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.footer{
    background-color: #E56131;
    border-radius: 5px; 
    position:absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
.icon{
    color: #fff;
    font-size: 25px;
  
}
.icon.fa-file-pdf{
    color:  #45322E ;
    font-size: 70px;
}
.icon.fa-video{
    color:  #45322E;
    font-size: 70px;
}
.les-liens{
    display: flex;
    justify-content: center;
    gap: 50px;
}
.lienVideo{
    font-size: 12px;
}
.lienPdf{
    font-size: 12px;

}
.prof, .titre_cours{
    font-style: italic;
    font-weight: 600;
}
.suivi, .cours-en{
    text-align: right;
    margin: 0;
    font-size: 14px;
  
    font-style: italic;
}

.duree, .titre{
    font-style: italic;
    font-weight: 600;

}
.buttun{
    background-color: #E56131;
    color: #fff;
    padding: 0 20px;
    border: 1px solid #000;

}
.buttun:hover{
    border: 1px solid #fff;

}
.title_list{
    color: #fff;
}

    </style>
    </head>
    <body>
    <?php include ('Includes/Navbar.php'); ?>
    <div class="container parant-list ">
            <div class="row justify-content-center ">
                <div class="col-md-5 px-0 title_list"><h2>Liste des  <b>Cours</b></h2></div>
                <div class="col-md-5 d-flex justify-content-end px-0">
                    <button type="button" class="btn buttun add-new" onclick="window.location.href = 'AjoutCours.php'"><i class="fa fa-plus"></i>Ajouter un nouveau Cours</button>
                </div>
           
        <?php  
                include("connexiondb.php");
                // $requete =  "SELECT * from cours";
                // $requete1 =  "SELECT * from coach";
                // $req1 = $bd->query('SELECT * from coach');
                // $req2 = $bd->query('SELECT * from programme');
             $req = $bd->query('SELECT cours.libelle, cours.detail, cours.urlvideo,
                                cours.fichier,cours.dure,coach.prenomcoach,coach.nomcoach, 
                                programme.domaine, programme.titre
                                FROM cours, coach, programme
                                 WHERE cours.idcoach = coach.idcoach 
                                 AND cours.numprogramme = programme.numprogramme');
                // $result = $bd->query($requete);
                // $result1 = $bd->query($requete1);
            while($row = $req->fetch()){ 
                    echo "<div class ='col-md-5 card-list'>";
                        echo "<div >";
                            echo "<h3>" . $row['libelle'] . "</h3>";
                            echo "<p>" . $row['detail'] ."</p>";
                            echo "<p class='suivi'>Coach: <span class='titre_cours'>".$row['prenomcoach']." ".$row['nomcoach']."</span></p>";
                            echo "<p class='cours-en'>Domaine: <span class='prof'>". $row['domaine']."</span></p>";
                            echo "<h6>Titre: <span class ='titre'>".$row['titre']."</span></h6>";
                            echo "<h6>Duree: <span class ='duree'>".$row['dure']."heurs</span></h6>";
                        echo "</div>";
                        echo "<div class='les-liens'>";
                            echo "<div>";
                                echo 
                                    "<a href= '".$row['fichier']."'>
                                    <i class ='icon fa-solid fa-file-pdf' title ='telecharger ce cours'></i>
                                    </a>";
                                echo "<p class='lienPdf'>le cours en Pdf</p>";
                            echo "</div>";
                            echo "<div>";
                            echo 
                                "<a  href= '".$row['urlvideo']."'>
                                    <i class ='icon fa-solid fa-video' title ='Suivez cette video'></i>
                                </a>";
                            echo "<p class='lienVideo'>le lien du videof</p>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='footer'>";
                            echo "<i class ='fa-solid fa-pen-to-square icon' title ='Modifier ce cours'></i>";
                            echo "<i class ='fa-solid fa-trash-can icon' title ='Supprimer ce cours'></i>";
                        echo "</div>";
                    echo "</div>";
                    }?>  

            </div>
    </div>


    </body>
</html>
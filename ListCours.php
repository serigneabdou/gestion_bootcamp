<?php require('Actions/securityAction.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <?php include ('Includes/head.php'); ?>
        <link rel= "stylesheet" href="./Assets/style/listcoach.css">
        
    <style>
        
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.main {
    position: relative;
    top: 30px;
}

body {
    color: #404E67;
    background: rgba(0, 0, 0, 0.5);
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 100%;
    margin: 50px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
 }
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}


table.table {
    table-layout: auto;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}


.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
.delete{
    color: rgba(247, 69, 69, 0.873);
    margin: 4px;
    padding: 4px;
    font-size: 20px;
}
.edit{
    color: rgb(244, 234, 53);
    margin: 4px;
    padding: 4px;
    font-size: 20px;
}
.parant-list{
    display: flex;
    justify-content: space-around;
    margin-top: 70px;
}
.card-list{
    background-color: #fff;
    border-radius: 10px;
    height: 370px;
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
}
.suivi, .cours-en{
    text-align: right;
    margin: 0;
    font-size: 13px;
    font-weight: 600;
}
.duree{
    font-style: italic;
    font-weight: 600;

}

    </style>
    </head>
    <body>
    <?php include ('Includes/Navbar.php'); ?>
    <div class="container mt-5 ">
            <div class="parant-list ">
           
        <?php  
                include("connexiondb.php");
                $requete =  "SELECT * from cours";
                $requete1 =  "SELECT * from coach";
                // $req1 = $bd->query('SELECT * from coach');
                $req2 = $bd->query('SELECT * from programme');
                $result = $bd->query($requete);
                $result1 = $bd->query($requete1);
            while($row = $result->fetch()){ 
                    echo "<div class = 'card-list'>";
                        echo "<div>";
                            echo "<h3>" . $row['libelle'] . "</h3>";
                            echo "<p>" . $row['detail'] ."</p>";
                            while($ligne1 = $result1->fetch()){ 
                                if($ligne1['idcoach'] == $row['idcoach']){
                                    echo "<p class='suivi'>suivi par :<span class='titre_cours'></span>".$ligne1['prenomcoach']."</p>";
                                }}
                            echo "<p class='cours-en'> Domaine:<span class='prof'>.'Programmation'.</span></p>";
                            echo "<h6>La duree:<span class ='duree'>".$row['dure']."heurs</span></h6>";
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
                    echo "</div>";}?>  

         
            </div>
    </div>

</div>  
   <!-- <div class="container">
        <div class="parant-list">
            <div class="card-list">
                <div>
                    <h3>titre</h3>
                    <p> Lorem ipsum dolor sit amet consectetur 
                  
                    </p>
                    <P class="suivi">suivi par :<span class="titre_cours">Mouhamed kandji</span></P>
                    <P class="cours-en">Domaine :<span class="prof">Programmation</span></P>
                </div>
                <div class="les-liens">
                    <div>
                        <i class="icon fa-solid fa-file-pdf " title="telecharger ce cours"></i>
                        <p class="lienPdf">le cours en Pdf </p>
                    </div>
                    <div>
                        <i class="icon fa-solid fa-video"></i>
                            <p class="lienVideo">le lien du video</p>
                    </div>
                </div>
               
                <div class="footer">
                    <i class="fa-solid fa-trash-can icon"></i>
                    <i class="fa-solid fa-pen-to-square icon"></i>
                </div>
             
            </div>
            <div class="card-list">
                <div>
                    <h3>titre</h3>
                    <p> Lorem ipsum dolor sit amet consectetur 
                   
                    </p>
                    <P class="suivi">suivi par :<span class="titre_cours">Mouhamed kandji</span></P>
                    <P class="cours-en">Domaine :<span class="prof">Programmation</span></P>
                </div>
                <div class="les-liens">
                    <div>
                        <i class="icon fa-solid fa-file-pdf " title="telecharger ce cours"></i>
                        <p class="lienPdf">le cours en Pdf </p>
                    </div>
                    <div>
                        <i class="icon fa-solid fa-video"></i>
                            <p class="lienVideo">le lien du video</p>
                    </div>
                </div>
               
                <div class="footer">
                    <i class="fa-solid fa-trash-can icon"></i>
                    <i class="fa-solid fa-pen-to-square icon"></i>
                </div>
             
            </div>
            <div class="card-list">
                <div>
                    <h3>titre</h3>
                    <p> Lorem ipsum dolor sit amet consectetur 
                    </p>
                    <P class="suivi">suivi par :<span class="titre_cours">Mouhamed kandji</span></P>
                    <P class="cours-en">Domaine :<span class="prof">Programmation</span></P>
                    <h6>La duree: <span class="duree">2 heurs</span></h6>
                </div>
                <div class="les-liens">
                    <div>
                        <i class="icon fa-solid fa-file-pdf " title="telecharger ce cours"></i>
                        <p class="lienPdf">le cours en Pdf </p>
                    </div>
                    <div>
                        <i class="icon fa-solid fa-video"></i>
                            <p class="lienVideo">le lien du video</p>
                    </div>
                </div>
               
                <div class="footer">
                    <i class="fa-solid fa-trash-can icon"></i>
                    <i class="fa-solid fa-pen-to-square icon"></i>
                </div>
      
   </div> -->
    </body>
</html>
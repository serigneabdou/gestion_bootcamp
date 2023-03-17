<?php require('Actions/securityAction.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include ('Includes/head.php'); ?>
    <!-- <link rel="stylesheet" href="Assets/style/dasbhordAdmin.css"> -->
    <link rel="stylesheet" href="./Assets/style/listApprenant.css" >
</head>
<body>
    <?php include ('Includes/Navbar.php'); ?>
    <main class="">
        <div class="container main">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>Liste des  <b>Apprenants</b></h2></div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-info add-new" onclick="window.location.href = 'AjoutApprenant.php'"><i class="fa fa-plus"></i>Ajouter un nouveau Apprenant</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr class='text-center'>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                            include("connexiondb.php");
                            $requete =  "SELECT * from apprenant";
                                
                            $result = $bd->query($requete);
    
                            while($row = $result->fetch()){ 
                                        echo "<tr>";
                                            echo  "<td>" . $row['idappr'] . "</td>";
                                            echo  "<td>" . $row['nomappr'] . "</td>";
                                                echo "<td>" . $row['prenomappr'] ."</td>";
                                                echo "<td>" . $row['adresseappr'] ."</td>";
                                                echo "<td>" . $row['emailappr'] ."</td>";
                                                echo "<td>" . $row['telephoneappr'] . "</td>";
                                                echo "<td class=''> 
                                                        <i class='delete fa-solid fa-trash '></i>
                                                        <i class='edit fa-solid fa-pen-to-square'></i>
                                                    </td>";
                                            
                                                
                                                
                                            echo "</tr>";}
                                    ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
 </body>
</html>
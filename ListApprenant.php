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
                    <!--table-->
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
                                $id =  $row['idappr'] ;
                                $nomAppr= $row['nomappr'];
                                $prenomAppr = $row['prenomappr'];
                                $addressAppr= $row['adresseappr'] ;
                                $emailAppr = $row['emailappr'];
                                $phoneAppr =  $row['telephoneappr']; 
                                        echo "<tr>";
                                            echo  "<td>" . $id . "</td>";
                                            echo  "<td>" .  $nomAppr . "</td>";
                                                echo "<td>" . $prenomAppr ."</td>";
                                                echo "<td>" . $addressAppr ."</td>";
                                                echo "<td>" . $emailAppr ."</td>";
                                                echo "<td>" . $phoneAppr . "</td>";
                                                echo "<td> 
                                                       <a href='delete.php? deleteAppr=".$id."'><i class=' fa fa-solid fa-trash btn btn-danger ' ></i></a>
                                                        <a><i class=' fa fa-solid fa-pen-to-square btn btn-warning text-white'></i></a>
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
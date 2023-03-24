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
    </style>
    </head>
    <body>
    <?php include ('Includes/Navbar.php'); ?>
    <div class="container-lg main">
    <div class="table-responsive">
        <div class="table-wrapper">
        <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Liste des  <b>Coach</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href = 'AjoutCoach.php'"><i class="fa fa-plus"></i>Ajouter un nouveau coach</button>
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
                            <th scope="col">Specialité</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                               include("connexiondb.php");
                               $requete =  "SELECT * from coach";
                          
                             $result = $bd->query($requete);
                            while($row = $result->fetch()){ 
                                $id =  $row['idcoach'] ;
                                $nomCoach= $row['nomcoach'];
                                $prenomCoach = $row['prenomcoach'];
                                $addressCoach= $row['adressecoach'] ;
                                $emailCoach = $row['emailcoach'];
                                $specialite =  $row['specialite'];
                                $phoneCoach =  $row['telephonecoach'];
                                   echo "<tr>";
                                       echo  "<td>" . $id. "</td>";
                                       echo  "<td>" .  $nomCoach . "</td>";
                                        echo "<td>" . $prenomCoach ."</td>";
                                        echo "<td>" . $addressCoach ."</td>";
                                        echo "<td>" . $emailCoach ."</td>";
                                        echo "<td>" . $specialite ."</td>";
                                        echo "<td>" . $phoneCoach . "</td>";
                                        echo  "<td> 
                                        <a href = 'delete.php? deleteCoach=".$id."'><i class=' fa fa-solid fa-trash btn btn-danger'></i></a>
                                       <a href='update.php? updateCoach=".$id."'> <i class=' fa fa-solid fa-pen-to-square btn btn-warning text-white'></i></a>
                                    </td>";
                                    echo "</tr>";}
                            ?>  
                </tbody>
            </table>
        </div>
    </div>
</div>  
    </body>
</html>
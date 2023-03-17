
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="./Assets/style/listApprenant.css" >
    <title>Tous les aprrenants</title>

    </head>
    <body>
    <?php include ('Includes/Navbar.php'); ?>
    <div class="container">
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
    </body>
</html>
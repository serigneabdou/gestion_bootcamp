
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href="./Assets/style/listcoach.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Tous les aprrenants</title>
    <style>
        
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
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
    
    <div class="container-lg">
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
                                   echo "<tr>";
                                       echo  "<td>" . $row['idcoach'] . "</td>";
                                       echo  "<td>" . $row['nomcoach'] . "</td>";
                                        echo "<td>" . $row['prenomcoach'] ."</td>";
                                        echo "<td>" . $row['adressecoach'] ."</td>";
                                        echo "<td>" . $row['emailcoach'] ."</td>";
                                        echo "<td>" . $row['specialite'] ."</td>";
                                        echo "<td>" . $row['telephonecoach'] . "</td>";
                                        echo "<td> 
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
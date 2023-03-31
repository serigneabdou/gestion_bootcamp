<?php 
include("connexiondb.php");

if(isset($_GET['deleteCoach'])){
    $id = $_GET['deleteCoach'];
    
    $sql = "DELETE  from `coach` where idcoach= $id";
    $result = $bd->query($sql);
    
    if($result){
        header('location: ListCoach.php');
    } 
}

if(isset($_GET['deleteAppr'])){
    $id = $_GET['deleteAppr'];
    
    $sql = "DELETE  from `apprenant` where idappr= $id";
    $result = $bd->query($sql);
    
    if($result){
      header('location:ListApprenant.php');
    } 
}


?>
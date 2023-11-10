<?php 
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');
    include('connexion.php');

    $intitule = post('intitule');
    $query = ' INSERT todo (intitule) VALUES(:intitule)';
    $stmt =$conn->prepare($query);
    $stmt -> bindParam('intitule', $intitule);
    $stmt->execute();
    
   

    header('Location:index.php');
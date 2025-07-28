<?php

$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password=''; 

try{
    $pdo =new PDO($dsn,$username,$password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //recupère les infos//

    $query ='SELECT * FROM users'; 
    $stmt =$pdo->query($query); 
    $users=$stmt->fetchAll(PDO::FETCH_ASSOC); 


    //affiche les utilisateurs//
    foreach ($users as $user){
        echo"Pseudonyme".$user['pseudo']. "<br>";
        echo"Email".$user['email']. "<br>";
    }


}

catch (PDOException $e){
    echo" Erreur de connexion bdd : ".$e->getMessage(); 
}
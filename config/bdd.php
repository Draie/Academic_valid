<?php
$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password='';


try{

    $pdo =new PDO($dsn,$username,$password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
        
catch (PDOException $e){
    echo"Erreur de connexion à la base de donnée :".$e->getMessage(); 
}




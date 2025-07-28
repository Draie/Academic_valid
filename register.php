<?php
$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password='';

try{
    $pdo =new PDO($dsn,$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 


    //récupération donnée formulaire//
    $pseudoForm=$_POST['pseudo']; 
    $emailForm=$_POST['email']; 
    $passwordForm=$_POST['password']; 


        //vérif unicité//
        $query="SELECT * FROM users WHERE email = :email";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(':email', $emailForm);
        $stmt->execute(); 

// Verif si user existe deja//

    if($stmt->rowCount() > 0){
        die("cette email existe deja"); 
    }

        // traitement mdp avant stockage//
        $hashedPassword =password_hash($passwordForm, PASSWORD_DEFAULT); 

        //insérer les données dans la bdd//

        $insertQuery ="INSERT INTO users (pseudo,email,password) VALUES (:pseudo, :email, :password)"; 
        $stmt= $pdo->prepare($insertQuery); 
        $stmt->bindParam(':pseudo', $pseudoForm); 
        $stmt->bindParam(':email', $emailForm); 
        $stmt->bindParam(':password', $hashedPassword); 
        $stmt->execute(); 

        echo "Inscription réussis"; 


}

catch(PDOException $e){
    echo "erreur lors de l'inscription : ".$e->getMessage(); 
}
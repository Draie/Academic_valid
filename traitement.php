

<?php
require_once "header.php"; 

$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password='';

try{
    $pdo =new PDO($dsn,$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

//Récupère la note via le formulaire du dashboard//
$note = $_POST["note"]; 

  $insertQuery ="INSERT INTO note (id,user_id,score, comments, dates) VALUES (UUID(),:user_id,:score, :comments,:dates)"; 
        $stmt= $pdo->prepare($insertQuery); 
        $stmt->bindParam(':pseudo', $pseudoForm); 
        $stmt->bindParam(':email', $emailForm); 
        $stmt->bindParam(':password', $hashedPassword); 
        $stmt->execute(); 


}
 if ($note >= 15){
    echo " Bien joué, tu a dead ".$name." </br><a href=index.php> Revenir à l'accueil <a/>"; 
   
 } elseif ($note < 15) {
    echo" Sah, c'est pas ouf ".$name."  </br><a href=\index.php>Revenir à l'accueil <a/> "; 
 }
 ?>
</h2>

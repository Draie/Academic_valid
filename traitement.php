

<?php
// CONTROLLER NOTE //
require_once "header.php"; 
require_once "score.php";
$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password='';
session_start();


   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pdo =new PDO($dsn,$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

//Récupère la note via le formulaire du dashboard//
//$id=0;
$user_id= $_SESSION['id']; 
$score = $_POST['score']; 
$score = (string)$score;
$comments =$_POST['comments'];
$name =$_SESSION['pseudo'];
$dates = (string)date('Y-m-d');
$id =(string)uniqid();





try{
   $note = new Score( $id,$user_id, $score,$comments, $dates);
  $insertQuery ="INSERT INTO note (id,user_id,score,comments, dates) VALUES (:id,:user_id,:score, :comments,:dates)"; 
          $stmt= $pdo->prepare($insertQuery); 
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':user_id', $user_id); 
        $stmt->bindParam(':score', $score, PDO::PARAM_INT);
      $stmt->bindParam(':comments', $comments); 
      $stmt->bindParam(':dates', $dates); 
        $stmt->execute(); 



}catch (Exception $e){
  //pour si je fait un journal d'erreur//
echo "une erreur est survenue : ".$e->getMessage();

}finally{
  
if ($score>= 15){
    echo " Bien joué, tu a dead ".$name." </br><a href=dashboard.php> Revenir à l'accueil <a/></br> <br><br><div class='notif'> Note enregistré avec succès<div/> "; 
   
 } elseif ($score < 15) {
    echo" Sah, c'est pas ouf ".$name."  </br><a href=\dashboard.php>Revenir à l'accueil <a/><br><div class='notif'> Note enregistré avec succès<div/> "; 
 }
    

}

   }

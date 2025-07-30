<?php
session_start();
echo $_SESSION['pseudo'];
$id=$_SESSION['id'];
require_once "score.php";
/*
if (!isset($_SESSION['pseudo'])) {
    header('Location: loginPost.php');
    exit;
}
    */
$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password='';
 $pdo =new PDO($dsn,$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 


      $query ="SELECT * FROM note WHERE user_id = :id"; 
            $stmt =$pdo->prepare($query); 
            $stmt->bindParam(':id', $id); 
            $stmt->execute();
           


//Affiche toutes les notes de l'utlisateur//
            while ($histoNotes =  $stmt->fetch(PDO::FETCH_ASSOC)) {
           
    echo 'note : '.$histoNotes['score']. "</br>";
     echo 'Date '. ($histoNotes['dates']) ."</br>";
      echo 'Commentaire ' .($histoNotes['comments'])."</br>";}

  
?>






<main>
        <a href="logout.php">Se déconnecter</a>
<h1> J'évalue ta note</h1>



<form class="form" method="POST" action="traitement.php">
    <h2> Alors ta eu combien ? </h2>
     <input class ="score" type="number" placeholder="0" name ="score" min="1" max="20" required />
     <input class="comments" type="text"placeholder="Commentaire" name="comments" required/>
       <!--   <input class="dates" type="date" name="dates" required/> a effacer plus tard-->

    <button type="submit">Evaluer</button>
    
</form>

<h4> Historique de tes notes</h4>


</main>

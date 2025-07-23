

<?php
require_once "header.php"; 
$note = $_POST["note"]; 
$name =$_POST["name"]; 
?>


<h2 class="responses">
<?php
 if ($note >= 15){
    echo " Bien joué, tu a dead ".$name." </br><a href=index.php> Revenir à l'accueil <a/>"; 
   
 } elseif ($note < 15) {
    echo" Sah, c'est pas ouf ".$name."  </br><a href=\index.php>Revenir à l'accueil <a/> "; 
 }
 ?>
</h2>

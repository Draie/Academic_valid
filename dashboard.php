<?php
session_start();
/*
if (!isset($_SESSION['pseudo'])) {
    header('Location: loginPost.php');
    exit;
}
    */
?>


<main>
        <a href="logout.php">Se déconnecter</a>
<h1> J'évalue ta note</h1>



<form class="form" method="POST" action="traitement.php">
    <h2> Alors ta eu combien ? </h2>
     <input class ="score" type="number" placeholder="0" name ="score" min="1" max="20" required >
    <button type="submit">Evaluer</button>
    
</form>


</main>

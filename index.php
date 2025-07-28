<?php
require_once "header.php"; 
?>



<title>Connexion</title>
<body>
    <h1>Connexion</h1>
    <form action="loginPost.php" method="POST">
        <input type="email"name="email" placeholder="Adresse e-mail"/>
        <input type="password"name="password" placeholder="Mot de passe"/>
        <button type="submit" >Se connecter</button>
        <a href="registerForm.php"> Pas encore de compte ? Inscrit-toi ici</a>
    </form>
</body>
<!---
<main>
<h1> J'évalue ta note</h1>



<form class="form" method="POST" action="traitement.php">
    <h2> Alors ta eu combien ? </h2>
     <input class ="note" type="number" placeholder="0" name ="note" min="1" max="20" required >
    <input class="name"type="text" placeholder="C'est quoi ton petit nom ?" name ="name" required>
    <button type="submit">Evaluer</button>
    
</form>


</main>
--->
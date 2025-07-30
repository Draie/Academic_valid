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

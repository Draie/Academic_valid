<?php

    $feuilleDeStyle = "<link rel='stylesheet' type='text/css' media='screen' href='style\connexion_form.css'>";
   
require_once "header.php"; 
echo $feuilleDeStyle;
?>



<title>Connexion</title>
<body class="form_connexion_container">

    <h1 class="title">CONNEXION</h1>
    <form action="loginPost.php" method="POST">
        <input type="email"name="email" placeholder="E-mail"/>
        <input type="password"name="password" placeholder="Mot de passe"/>
        <button type="submit" >Se connecter</button>
        <a href="registerForm.php"> Pas encore de compte ? Inscrit-toi ici</a>
    </form>
</body>

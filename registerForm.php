<?php

    $feuilleDeStyle = "<link rel='stylesheet' type='text/css' media='screen' href='style/register_form.css'>";
   
require_once "header.php"; 
echo $feuilleDeStyle;
?>

<h1 class="title">INSCRIPTION</h1>
<body class="form_register_container">

    <form action="register.php" method="POST">
          <input type="pseudo"name="pseudo" placeholder="Pseudo"/>
        <input type="email"name="email" placeholder="E-mail"/>
        <input type="password"name="password" placeholder="Mot de passe"/>
        <button type="submit" >S'inscrire</button>

         <a href="index.php"> Déja un compte ? Connecte-toi ici</a>
    </form>
     
    
</body>
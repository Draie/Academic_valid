
<?php
$dsn ='mysql:host=localhost;dbname=academic_db'; 
$username='root'; 
$password='';


try{

    $pdo =new PDO($dsn,$username,$password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Récupère info form*/
$emailForm = $_POST["email"]; 
$passwordForm =$_POST["password"]; 


//Récupère les utilisateurs //
$query ="SELECT * FROM users WHERE email = :email"; 
$stmt =$pdo->prepare($query); 
$stmt->bindParam(':email', $emailForm); 
$stmt->execute();


// verifie que l'utilisateur existe//
        if($stmt->rowCount() == 1){
            $monUser=$stmt->fetch(PDO::FETCH_ASSOC); 
            if(password_verify($passwordForm, $monUser['password'])){
                //initialisation de la session
                //
                                    session_start();
                                    $_SESSION['pseudo'] = $user['pseudo'];
                                   //viens d'etre rajouter $_SESSION['id']=$user['id'];//
                                    header('Location: dashboard.php');

                                    echo "Bienvenue ".$monUser['pseudo'];

                                }
                                        else{
                                            echo"Mot de passe incorrect"; 
                                        }
                }
            else{
                echo"utilisateur introuvable"; 
                        }
        }
        
catch (PDOException $e){
    echo"Erreur de connexion à la base de donnée :".$e->getMessage(); 
}




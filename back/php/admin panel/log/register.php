<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/index.css">
    <title>Register</title>
</head>

<body>
<?php
require('../config/config.php');
// on verrifie si les champ nom , mail , mot de passe ne sont pas vide :
    // les variable commencant par $_ ou $GLOBALS sont des superglobale ce qui signifie qu'elles sont disponibles quel que soit le contexte du script
if (
    isset(
        $_REQUEST['username'],
        $_REQUEST["email"],
        $_REQUEST['password']))
        {   
        // on supprime les anti slash avec la méthode stripcslashes
            $username  =stripcslashes($_REQUEST['username']);
            // real_escape_string : Protège les caractères spéciaux d'une chaîne pour l'utiliser dans une requête SQL, en prenant en compte le jeu de caractères courant de la connexion
            $username = mysqli_real_escape_string($conn,$username);
            // on répete l'opération pour chaque champ 
            //récuperer l'email :
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($conn,$email);
            //on récupère le mot de passe :
            $password = stripcslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn,$password);

            // une fois tout récupérer on fait une requete a la BDD 
            // la metode .hash permet de hasher le mot de passe avant de le stocker en BDD pour qu'il ne soit pas visible clairement en cas de HACK
            $query = "INSERT into `users` (username,email,type,password)
            VALUES ('$username','$email','$username'".hash('sha256',$password)."')";
            //on envoie la requete 
            $res = mysqli_query($conn,$query);
        
            // si la requete est passé on injecte un code html pour ceconnecter
            if($res){
                echo "<div class='sucess'>
                <h3>Vous êtes inscrit avec succès.</h3>
                <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
          </div>";
            }
            }else{
                ?>
                <form class="box" action="" method="post">
                    <h1 class="box-titre">S'inscire</h1>
                    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required/>
                    <input type="text" class="box-input" name="email" placeholder="email" required />
                    <input type="password" class="box_input" name="password" placeholder="mot de passe " required />
                    <input type="submit" value="S'inscrire" class=box-bouton name="submit"/>
                    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici ! </p>
                </form>
                <?php } ?>
            }

        }
?>
</body>
</html>

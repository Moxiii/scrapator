<?php
// 1 st , ce connecter a la bdd 
$host = "localhost";
$username ="root";
$password="";

$conn = new mysqli($host,$username,$password);

if($conn->connect_error){
  die('erreur de connection , code erreur : '.$conn->connect_error);
}



//close connexion
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr_FR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./front/static/css/style.css" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <title>Scrap multisite</title>
  </head>
  <body>

  </body>
</html>

<?php
// Information de connexion a la base de données 
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','')
define('DB_NAME','regitration');

// connexion a la BDD

$conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

// verfifier la connexion 
if($conn==false){
    die('ERREUR: Impossible de ce connecter, code erreur:'.mysqli_connect_error());
}
?>
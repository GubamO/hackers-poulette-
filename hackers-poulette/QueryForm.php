<?php

include "form.php";

$host = "localhost";
$port = 3306;
$dbname = "form-hackers-poulette";
$user = "root";
$pwd = "";

try{
    $newdb= new PDO('mysql:host=$host;port=$port;dbname=$dbname', $user, $pwd);
    echo "Connexion établie";
}catch(PDOException $e){
    die("erreur :" .$e ->getMessage());
}

if(isset($_GET["submitButton"]));
print_r($_GET);
?>
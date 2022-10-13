<?php

require 'Query.php';
require 'index.php';

if(isset($_POST['submitButton'])){

    $lastName = $_POST["lastname"];
    $firstName= $_POST["firstname"];
    $mail = $_POST["mail"];
    $picture = $_POST["picture"];

    if(!empty($lastName && !empty($firstName) && !empty($mail) && !empty($picture))){

        $req = $db->prepare('INSERT INTO clients(lastname, firstname,mail,picture) VALUES (:lastname, :firstname, :mail, picture)');

        $req->blindvalue(':lastname', $lastName);
        $req->blindvalue(':firstname', $firstName);
        $req->blindvalue(':mail', $mail);
        $req->blindvalue(':picture', $picture);

        $result = $req->execute();

        if (!$result) {
            echo "Un problème est survenu, votre enregistrement n'a pas été admis";
        }
    }else {
        echo "<script type=\"text/javascript\" alert('Votre demande a bien été traitée')";
    }
}

?>
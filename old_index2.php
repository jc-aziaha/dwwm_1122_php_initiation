<?php
    // var_dump($_GET);
    // var_dump($_POST);

    require "h.php";
    // include "h.php";

    // echo $first_name;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST">
            <div>
                <label for="last_name">Nom</label>
                <input type="text" name="last_name" id="last_name">
            </div>
            <div>
                <label for="first_name">Prénom</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" >
            </div>
        </form>
    </body>
</html>

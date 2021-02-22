<?php
include "functions.php";
// $data;
// $error;

if (isset($_GET["action"]) and $_GET["action"] == "submit") {
    if (username_v() and email_v() and pass_v()) {
        if (checkUser()) {
            echo("<h4 style='color: #ff0000;'> Cet utilisateur existe déjà </h4>");
            ///var_dump($data);
        } else {
            echo("<h4 style='color: #ff0000;'> Enregistré avec succès</h4>");
        }

    } else {
        echo("<h4 style='color: #f53;'> $error</h4>");
    }
}


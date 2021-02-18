<?php

function username_v()
{
    global $error;

    if (isset($_POST["username"]) and ($_POST["username"] != null)) {
        if (preg_match("/^([a-zA-Z0-9._-]){6,30}$/", $_POST["username"])) {
            return true;
        } else {
            $error = "Le nom d'utilisateur doitre être composé de lettre anglaise...";
            return false;
        }
    } else {
        $error = "Veuillez remplir le champ nom d'utilisateur";
        return false;
    }
}

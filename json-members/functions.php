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

function email_v()
{
    global $error;
    if (isset($_POST["email"]) and ($_POST["email"] != null) and (isset($_POST["email2"]) and $_POST["email2"] != null)) {
        if ($_POST["email"]) {
            if ($_POST["email"] != $_POST["email2"]) {
                $error = " Email ne correspond pas";
                return false;
            } else {
                return true;
            }
        } else {
            $error = "Veuillez saisir un e-mail valide";
            return false;
        }
    } else {
        $error = "Veuillez remplir les champ email";
        return false;
    }
}
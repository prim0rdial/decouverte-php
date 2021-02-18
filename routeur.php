<?php
if (isset($_GET["page"])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'dictionnaire':
            include "dictionnaire.php";
            break;
        case 'formulaire':
            include "formulaire.php";
            break;
        case 'balance':
            include "balance.php";
            break;
        case 'GET':
            include "get.php";
            break;
        case "page2":
            include "page2.php";
            break;
        case "formulaire2":
            include "formulaire2.php";
            break;
        case "session":
            include "session.php";
            break;
        case "formulaire3":
            include "formulaire3.php";
            break;
        case "lecture":
            include "lecture.php";
            break;
        case "test_zone":
            include "test_zone.php";
            break;
        case "json_member";
            include "./json-members/index.php";
            break;
        case "signup";
            include "./json-members/signup.php";
            break;
    }
}

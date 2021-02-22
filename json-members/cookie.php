<?php

// setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
if (isset($_GET['name']) and $_GET['name'] != null and $_GET['name'] == $_COOKIE['name']) {
    setcookie('name', $_GET['name'], time() + 60 * 60 * 24);
    $affichage = 'welcome ' . $_GET['name'] . ' the cookie "name" is set to ' . $_GET['name'];
    $affichage .= '<br>please go to <a href="test.php">page test</a> to test the cookies';
    $affichage .= '<br>please go to <a href="supprimer_cookie.php">page supprimer_cookie</a> to remove the cookies';
    echo $affichage;
} else {
    if (isset($_COOKIE["name"])) {
        //var_dump($_COOKIE);
        $name = $_COOKIE['name'];
        echo "your name is $name this is done using cookies ;)";
        echo '<br>please go to <a href="supprimer_cookie.php">page supprimer_cookie</a> to remove the cookies';
    } else {
        echo 'please enter your name in the first <a href="index.php">page</a>';
    }
}

<?php
$content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, alias!";
setcookie("testcookie", $content, time() + 30);
var_dump($_COOKIE["testcookie"]);
?>
<div>
    <nav class="navbar mt-3 container">
        <a href="index.php?page=index" class="nav-link">Accueil</a>
        <a href="index.php?page=login" class="nav-link">Connexion</a>
        <a href="index.php?page=signup" class="nav-link">Inscription</a>
    </nav>
    <div class="container mt-3">
        <form action="index.php?page=signup&action=submit" method="POST">
            <table>
                <tr>
                    <td><label> Nom : </label></td>
                    <td><input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td><label> E-mail : </label>
                    <td><input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br>
                </tr>
                <tr>
                    <td><label>Confirmation E-mail :</label>
                    <td><input type="text" name="email2" value="<?php echo isset($_POST['email2']) ? $_POST['email2'] : ''; ?>"><br>
                </tr>
                <tr>
                    <td><label>Mot de passe : </label>
                    <td><input type="password" name="password"><br>
                </tr>
                <tr>
                    <td><label>Confirmation mot de passe :</label>
                    <td><input type="password" name="password2"><br>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" name="submit" value="Enregistrement"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="container mt-3">
    <h2 class="text-danger">COOKIES</h2>
    <form action="./json-members/cookie.php" method="get">
        <label for="name">please enter your name :</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="send">
    </form>
</div>
<!--
    <form action="./json-members/cookie.php" method="get">

[
{
 "username":"username1",
 "password":"123456",
 "email":"username1@example.com"
},
  {
   "username":"username2",
   "password":"333666999",
   "email":"username2@ example.com"
  },
  {
   "username":"adminadmin",
   "password":"adminadmin",
   "email":"dodo@yahoo.fr"
  },
  {
   "username":"h.perreault",
   "password":"123456",
   "email":"dodo@yahoo.fr"
  },
  {
  "username":"inesines",
  "password":"123456",
  "email":"ines@yahoo.fr"
  }
]
 -->
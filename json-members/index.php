<!Doctype html>
<html dir="ltr" lang="fr">

<head>
    <meta charset="utf-8">
    <title> Nouvel enregistrement
    </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="mainLayout">
    <div class="header">
        <a href="#"> Accueil</a>
        <a href="login.php"> Connexion</a>
        <a href="signup.php"> Inscription</a>
    </div>
    <div class="content">
        <form action="index.php?page=signup&action=submit" method="POST">
            <table>
                <tr>
                    <td><label> Nom : </label></td>
                    <td><input type="text" name="username"
                               value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td><label> E-mail : </label>
                    <td><input type="text" name="email"
                               value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br>
                </tr>
                <tr>
                    <td><label>Confirmation E-mail :</label>
                    <td><input type="text" name="email2"
                               value="<?php echo isset($_POST['email2']) ? $_POST['email2'] : ''; ?>"><br>
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
    <div class="footer">
        <span>Tous droits résérvés</span><br/>
    </div>
</div>
<div>
    <H2>COOKIES</H2>
    <form action="cookie.php" method="get">
        please enter your name :
        <input type="text" name="name">
        <input type="submit" value="send">
    </form>
</div>
</body>

</html>
<!--
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
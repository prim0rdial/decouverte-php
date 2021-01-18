<div class="text-dark">
  <?php
  if (isset($_POST["pseudo"]) && isset($_POST["email"])) {
    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];

    if (strlen($pseudo) >= 8 && strlen($pseudo) <= 14) {
      echo "<p class=''>Le pseudo est : <strong>{$_POST['pseudo']}</strong></p>";
      echo "<p class='mt-3'>L'email est : <strong>{$_POST['email']}</strong></p>";

      $f = fopen("liste.txt", "a");
      fwrite($f, $_POST["pseudo"] . " - ");
      fwrite($f, $_POST["email"] . " \n ");
      $f = fclose($f);

      $url = "index.php?page=lecture&pseudo={$pseudo}&email={$email}";
      echo "<a class='btn btn-warning text-light font-weight-bold' href={$url}> Send </a>";
    } else {
      echo "<h1>Erreur le pseudo n'est pas de la bonne taille</h1>";
    }
  } ?>
</div>
<?php

if (isset($_POST["pseudo"]) && isset($_POST["email"])) {
  echo "le pseudo est : {$_POST['pseudo']} </br>";
}

?>
<div class="container w-50">
  <h1>Formulaire</h1>
  <form method="post" action="index.php?page=formulaire3" class="form-group">
    <label for="pseudo" class="form-text mt-3">Pseudo</label>
    <input type="text" class="form-control mt-2" id="pseudo" name="pseudo">
    <label for="email" class="form-text mt-3">Email</label>
    <input type="text" class="form-control mt-2" id="email" name="email">
    <button type="submit" class="btn btn-success mt-3">Submit</button>
  </form>
</div>
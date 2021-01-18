<?php
if (isset($_POST)) {
  if (isset($_POST["fruits"]) && isset($_POST["poids"])) {
    $fruits = $_POST["fruits"];
    $poids = floatval($_POST["poids"]);
  }
}

function price($fruits, $poids)
{
  $fruits_prix = [
    "Cerises" => 11,
    "Pommes" => 1.50,
    "Papayes" => 13,
    "Bananes" => 1.10,
  ];

  switch ($fruits) {
    case 'Cerises':
      $prix_total = $fruits_prix["Cerises"] * $poids;
      $prix_kg = $fruits_prix["Cerises"];
      break;
    case "Pommes":
      $prix_total = $fruits_prix["Pommes"] * $poids;
      $prix_kg = $fruits_prix["Pommes"];
      break;
    case "Papayes":
      $prix_total = $fruits_prix["Papayes"] * $poids;
      $prix_kg = $fruits_prix["Papayes"];
      break;
    case "Bananes":
      $prix_total = $fruits_prix["Bananes"] * $poids;
      $prix_kg = $fruits_prix["Bananes"];
      break;
    default:
      echo "Provide a weight please";
      break;
  }

  echo "<p>Prix total de {$poids}kg de {$fruits} est de <strong>{$prix_total}€</strong></p>";

  if (!empty($prix_total)) {
    echo "
      <img src='./assets/img/fruits/{$fruits}.jpg' alt='{$fruits}' class='d-block rounded float-left' width='200' height='200'>
      <p> {$fruits}/{$prix_kg}kg </p>
      ";
  }
}
?>

<h3 class="mt-5">Balance</h3>
<form action="#" method="POST">
  <section class="form-group w-50 mt-5">
    <label for="#" class="form-text mt-2">Selectionner un fruit</label>
    <select name="fruits" id="fruits" class="form-control">
      <option <?php if (isset($_POST["fruits"]) && $_POST["fruits"] == "Cerises") echo "selected"; ?>>Cerises
      </option>
      <option <?php if (isset($_POST["fruits"]) && $_POST["fruits"] == "Pommes") echo "selected"; ?>>Pommes
      </option>
      <option <?php if (isset($_POST["fruits"]) && $_POST["fruits"] == "Papayes") echo "selected"; ?>>Papayes
      </option>
      <option <?php if (isset($_POST["fruits"]) && $_POST["fruits"] == "Bananes") echo "selected"; ?>>Bananes
      </option>
    </select>
    <label class="form-text mt-2">Poids (kg):</label>
    <input class="form-control" type="text" name="poids" value="<?php echo $_POST['poids'] ?? ''; ?>">
    <button type="submit" class="mt-2 btn btn-primary text-uppercase">Afficher Prix</button>
  </section>
  <section>
    <?php
    if (!empty($fruits) && !empty($poids)) {
      price($fruits, $poids);
    }
    ?>
  </section>
</form>
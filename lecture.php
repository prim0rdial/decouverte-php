<?php
$nom_ficher = "liste.txt";
$fichier = file($nom_ficher);

echo "<table border=1>";
echo "<thead>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Mail </th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($fichier as $key => $value) {
  $test = explode("-", $value);
  echo "<tr><td>{$test[0]}</td><td>{$test[1]}</td></tr>";
}
echo "</tbody>";
echo "</table>";


print_r($_GET);

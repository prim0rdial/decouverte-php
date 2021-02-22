<?php
// If already using a database
$dsn = "mysql:host=localhost;dbname=northwind;port=3306";
$db = new PDO($dsn, "root", "");

try {
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $statement = $db->prepare("select societe, ville from northwind.clients;");
  $statement->execute();
  $res = $statement->fetchAll(PDO::FETCH_ASSOC);
  display_list($res);
} catch (PDOException $e) {
  echo "Problem with database {$e->getMessage()}";
  $db = null;
}
// Close connection
$db = null;

function display_list(array $arr)
{
  echo "<ul class='list-group'>";
  foreach ($arr as $key => $value) {
    echo "<li class='list-group-item'> {$key} . " . implode(" <strong>location</strong>: ", $value) . "</li>";
  }
  echo "</ul>";
}

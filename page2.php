<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Page 2</title>
</head>

<body>
  <?php
  echo "Favorite color is" . $_SESSION["favcolor"] . "</br>";
  echo "Favorite color is" . $_SESSION["favanimal"]  . "</br>";
  ?>
  <a href="index.php?page=GET">Page 1</a>
  <div class="font-weight-semibold">
  </div>
</body>

</html>
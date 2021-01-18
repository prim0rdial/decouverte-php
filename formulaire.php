<?php
$countries = [
  "France",
  "UK",
  "Spain",
  "Germany",
  "Portugal",
];

$jobs = [
  "Agent Immobilier",
  "Architecte",
  "Commerce et artisanat",
  "Web Master",
  "Community Manager",
];

$hobbies = [
  "Sport",
  "Voyage",
  "Music",
  "Lecture",
  "Internet",
  "Autre",
];

$genders = [
  "Male",
  "Female",
  "Other",
];

if (isset($_GET)) {
  if (isset($_GET["user_name"])) $user_name = $_GET["user_name"];
  if (isset($_GET["user_password"])) $user_password = $_GET["user_password"];
  if (isset($_GET["user_job"])) $user_job = $_GET["user_job"];
  if (isset($_GET["user_country"])) $user_country = $_GET["user_country"];
  if (isset($_GET["user_gender"])) $user_gender = $_GET["user_gender"];
  if (isset($_GET["user_hobbies"])) $user_hobbies = $_GET["user_hobbies"];
}

function fill_select(array $data)
{
  foreach ($data as $d) {
    echo "<option value=''>{$d}</option>";
  }
}

function fill_checkbox(array $data)
{
  foreach ($data as $d) {
    echo "<label class='ml-2'>{$d}</label>";
    echo "<input type='checkbox' class='ml-2' name='hobbies' value='{$d}'>";
  }
}

function fill_radio(array $data, string $name)
{
  foreach ($data as $d) {
    echo "<label class='ml-2'>{$d}</label>";
    echo "<input class='ml-2' type='radio' name='{$name}' value='{$d}'>";
  }
}

?>


<div class="">
  <h1>Formulaire</h1>
  <form action="" method="get" class="form-group bg-white shadow p-3 mb-5 bg-white rounded mt-3">
    <!-- User Name -->
    <div>
      <label class="form-text">User Name</label>
      <input type="text" name="user_name" placeholder="User Name" class="form-control">
    </div>
    <!-- User Password -->
    <div class="mt-3">
      <label class="form-text">User Password</label>
      <input type="password" name="user_password" class="form-control">
    </div>
    <!-- User Job -->
    <div class="mt-3">
      <label class="form-text">User Job</label>
      <select name="user_job" class="form-control">
        <?php
        fill_select($jobs);
        ?>
      </select>
    </div>
    <!-- User Country -->
    <div class="mt-3">
      <label class="form-text">User Country</label>
      <select name="user_country" class="form-control">
        <?php
        fill_select($countries);
        ?>
      </select>
    </div>
    <!-- User Gender -->
    <div class="mt-3">
      <label class="form-text">User Gender</label>
      <?php
      fill_radio($genders, "user_gender");
      ?>
    </div>
    <!-- User Hobbies -->
    <div class="mt-3">
      <label class="form-text">Hobby(ies)</label>
      <?php
      fill_checkbox($hobbies);
      ?>
    </div>
    <button class="btn btn-dark">Submit</button>
  </form>
</div>
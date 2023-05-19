<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $new_user = array(
    "username" => $_POST['createUsername'],
    "firstname" => $_POST['createFirstName'],
    "lastname"  => $_POST['createLastName'],
    "password" => $_POST['createPassword']
  );

  $sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "$tableName",
    implode(", ", array_keys($new_user)),
    ":" . implode(", :", array_keys($new_user))
  );

  $statement = $conn->prepare($sql);
  $statement->execute($new_user);
  header("Location: work/colourApp.php");
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
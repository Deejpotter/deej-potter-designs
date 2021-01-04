<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $new_user = array(
    "username" => $_POST['updateUsername'],
    "firstname" => $_POST['updateFirstName'],
    "lastname"  => $_POST['updateLastName'],
    "favouriteColour" => $_POST['updateFavouriteColour']
  );

  // This should get a row that matches the POST username
  $list = $conn->prepare("SELECT * FROM users WHERE username=?");
  $list->bindParam('1', $_POST['updateUsername']);
  $list->execute();
  $user = $list->fetch();

  $sql = "UPDATE users
            SET firstname = :firstname,
              lastname = :lastname,
              favouriteColour = :favouriteColour
            WHERE username = :username";

  // then check if the password from that row matches the POST password
  if($user['password'] == $_POST["updatePassword"]) {
    // if it does then update the fields with POST variables
    $statement = $conn->prepare($sql);
    // $list->bindParam(':username', $new_user['username']);
    // $list->bindParam(':firstname', $new_user['firstname']);
    // $list->bindParam(':lastname', $new_user['lastname']);
    // $list->bindParam(':favouriteColour', $new_user['favouriteColour']);
    $statement->execute($new_user);
  }
  header("Location: work/colourApp.php");
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
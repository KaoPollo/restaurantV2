<?php

var_dump($_GET);
die;


$conn = new mysqli('localhost','root','','restaurantv2');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $sql = "DELETE FROM comments WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header("Location: admin_index.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

$conn->close();
?>

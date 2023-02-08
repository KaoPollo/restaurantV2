<?php

session_start();

  $name = $_POST["name"];
  $email = $_POST["email"];
  $comments = $_POST["comments"];
  $restaurant = $_POST["restaurant"];
  

$conn = new mysqli('localhost','root','','restaurantv2');
     if($conn->connect_error){
         echo "$conn->connect_error";
         die("Connection Failed : ". $conn->connect_error);
     } else { $stmt = $conn->prepare("insert into comments(name, email, comments, restaurant) values(?, ?, ?, ?)");
         $stmt->bind_param("ssss", $name, $email, $comments, $restaurant);
         $execval = $stmt->execute();

         
         $stmt->close();
         $conn->close(); 
        }

        header("Location: ../guestbook.php");
        exit();
        ?>
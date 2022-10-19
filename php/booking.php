<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "ipsdnnyp_frontend", "1234", "ipsdnnyp_frontend");

if ($mysqli == false) {
  print("Error");
} else {
  $name = $_POST["name"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];


  if ($mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `phone`) VALUES ('$name', '$lastname', '$email', '$phone')")) {
    print("ok");
  }
}

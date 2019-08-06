<?php
// define variables and set to empty values
$nameErr = $emailErr = $messagerErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["message"])) {
    $messagerErr = "a message is requierd";
  } else {
    $messagerErr = test_input($_POST["message"]);
  }
}

// the error messages
?>
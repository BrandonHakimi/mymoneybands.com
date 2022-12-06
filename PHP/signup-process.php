<?php

if (empty($_POST["fname"])) {
    die("Name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"]) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/i", $_POST["password"]) {
    die("Password must contain at least one letter");
}

if ($_POST["password"] !== $_POST["cpassword"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/PHP/database.php";

$sql = "INSERT INTO user (fname, email, password_hash"

print_r($_POST); 
var_dump($password_hash);

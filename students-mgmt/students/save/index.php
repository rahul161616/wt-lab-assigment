<?php

require_once "../utls/db.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '',PASSWORD_DEFAULT); //encrypts password
$dob = $_POST['dob'] ?? '';
$favourite_color = $_POST['color'] ?? '';
$gender = $_POST['gender'] ?? '';
$weight = $_POST['weight'] ??'';
$hobbies = implode(",",$_POST['hobbies'] ?? []);
$nationality = $_POST['nationality'] ?? '';



$sql = "INSERT INTO students (name, email, password, dob, favourite_color, weight, gender, hobbies, nationality)
VALUES ('$name', '$email', '$password', '$dob', '$favourite_color', '$weight', '$gender', '$hobbies', '$nationality')";


if ($conn->query($sql)==TRUE)
{
      die ("success");
}else
{
    die("error");
}

//implode
//explode
//exam ma auxa
?>
<?php
session_start();
include 'connect.php';

$firstName = "";
$lastName = "";
$userName = "";
$email = "";
$password = "";


if(isset($_POST['signup'])){

    $firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS);
    $userName = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


    if(($firstName !== NULL && $lastName !== NULL) && 
    ($userName !== NULL && $email !== Null && $password !== Null)){

        $command = "SELECT * from users WHERE userName = $userName or email = $email LIMIT 1";
        $stmt= $dbh->prepare($command);
        

    }
}
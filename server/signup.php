<?php
// I, Ayub Ali, 000354446 certify that this material is my original work. No other person's work has been used without due acknowledgement.
session_start();
//includes connect for sql server.
include 'connect.php';
//includes User class file.
include 'User.php';

//Defines Variables for user. Collected from $_POST
$firstName = filter_input(INPUT_POST,"firstName", FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST,"lastName",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);


if(($firstName !== NULL && $lastName !== NULL) && ($email !== NULL && $password !== NULL)){
    $command = "INSERT INTO users (firstName,lastName,email,password) VALUES (?,?,?,?)";
    $stmt = $dbh->prepare($command);
    $params = [$firstName,$lastName,$email,$password];

    $success = $stmt->execute($params);
}
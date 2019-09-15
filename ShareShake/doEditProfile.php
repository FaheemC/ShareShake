<?php
session_start();
$firstname = ucfirst($_POST['first']);
$lastname = ucfirst($_POST['last']);
$email = $_POST['email'];
$location = $_POST['location'];
$password = $_POST['password'];

function updateUser($firstname, $lastname, $email , $location, $password, $id)
{
    global $conn;
    $sql = "UPDATE users SET fname='$firstname',lname='$lastname',email='$email', location='$location',password='$password' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        return "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

}

updateUser($firstname, $lastname, $email, $location, md5($password), $id);


?>
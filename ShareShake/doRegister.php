<?php
/**
 * Created by PhpStorm.
 * User: sctcad
 * Date: 28/11/2016
 * Time: 3:00 PM
 */
    session_start();
    require ('functions.php');
    require ('db.php');

    $firstname = ucfirst($_POST['fname']);
    $lastname = ucfirst($_POST['lname']);
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $password2 = $_POST['pass2'];

    if ( checkUSERbyusername($username) == TRUE  )
    {
        header('Location: register.php?message=Username Already Exists');
    }

    else if ($password != $password2){
        header('Location: register.php?message2=Both Passwords Must Match');
    }
    else if (filter_var($username, FILTER_VALIDATE_EMAIL) == FALSE) {
        header('Location: registration.php?message10=Enter A Valid Email');
    }
    else {
        newUSER($firstname, $lastname, $username, $password);
        header('Location: HomePage.php');
    }


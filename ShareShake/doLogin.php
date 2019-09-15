<?php
session_start();
require ('db.php');
require ('functions.php');
if(auth(get('username'),get('password'))){

    $_SESSION['is_valid_user'] = getUserByUsername(get('username'));
    $_SESSION['username'] = $_SESSION['is_valid_user'][3];
    $_SESSION['fname'] = $_SESSION['is_valid_user'][1];
    $_SESSION['lname'] = $_SESSION['is_valid_user'][2];
    $_SESSION['ID'] = $_SESSION['is_valid_user'][0];

    /*if (isset($_POST['setcookie']))
        setcookie('rememberme', $_SESSION['username'], time() + (86400 * 30));
    */
    header('Location: HomePage.php');
}


else {
    header('Location: login.php?msg=Wrong Username and Password');

}
?>


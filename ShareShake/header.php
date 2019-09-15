<?php
session_start();
require ('db.php');
require ('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">



    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>



<style>
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:hover,
    .nav-tabs > li.active > a:focus{
        color: black !important;
        border-top-color: deepskyblue !important;
    }

    .nav-tabs>li>a {
        border: 1px solid black !important;
        background-color: lightgrey;
        color: black;
    }

    #noborder {
        border-bottom: none !important;
    }

    #container {
        min-width: 200px;
        margin: auto;
        padding: 10px;


        float:left;
        width:100%;
        background-color: cornflowerblue;
    }

    #buttons {
        float: right;
        height: 50%;
    }

    #applyTutor {
        position: absolute;
        right: 1%;
    }

    #signOut {
        //position: absolute;
        top: 50px;
        right: 1%;
    }

    #Greeting {

        //position: absolute;
        float:right;
        clear:right;
        //padding-top: 35px;
        //padding-left: 1000px;
    }

    #logo {
        float:left;



    }

    body{
        padding-top: 0;
    }

</style>



<?php if(!isset($_SESSION['username'])){ ?>

<div id="container">
    <div id="buttons">

        <span id="signOut">
            <a href="HomePage.php"<button type="button" class="btn btn-danger">Home</button></a>
            <a href="register.php"<button type="button" class="btn btn-danger">Sign Up</button></a>
            <a href="login.php"<button type="button" class="btn btn-danger">Log In</button></a>
            <a href="contactus.php"<button type="button" class="btn btn-danger">Contact Us</button></a>


        </span>
    </div>

    <div id="logo">

        <a  href="HomePage.php"><img src="images/download.png" class="img-rounded" style="width:15%;" ></a>
        <h1 style="float:left;">ShareShake</h1>
    </div>



    <span id="Greeting">
        <h4>Welcome to ShareShake</h4>
    </span>
</div>
<?php } else {?>
<div id="container">
    <div id="buttons">
        <br>
        <span id="signOut">
            <a href="HomePage.php"<button type="button" class="btn btn-danger">Home</button></a>
            <a href="viewProfile.php"<button type="button" class="btn btn-danger">Profile</button></a>
            <a href="viewPosting.php"<button type="button" class="btn btn-danger">Listing</button></a>
            <a href="createListing.php"<button type="button" class="btn btn-danger">Create Post</button></a>
            <a href="signOut.php"<button type="button" class="btn btn-danger">Sign Out</button></a>
            <a href="contactus.php"<button type="button" class="btn btn-danger">Contact Us</button></a>


        </span>
    </div>

    <div id="logo">

        <a href="HomePage.php"><img src="images/download.png" class="img-rounded" width="15%"></a>
    </div>



    <span id="Greeting">
        <h4>Hello, <?php echo $_SESSION['fname']. " ". $_SESSION['lname'];?></h4>
    </span>
</div>
<?php } ?>

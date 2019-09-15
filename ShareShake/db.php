<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DATABASE','shareshake');
$conn = new mysqli(HOST,USER,PASS,DATABASE);

if($conn->connect_errno)
{
    die('Cannot connect to database, please try again latter');
}

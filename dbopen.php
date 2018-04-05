<?php
$servername="localhost";
$username="root";
$password="";

//create connection
$con= new mysqli($servername, $username, $password, "countrylist");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>

<?php 
$connection = mysqli_connect("localhost", "root","","riffan_project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Succesfully";
?>
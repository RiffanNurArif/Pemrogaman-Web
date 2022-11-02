<?php

$connection = mysqli_connect("localhost", "root","","riffan_project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Succesfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT * FROM guru");
if (!$query){
    echo ("Error query" . mysqli_error($connection));
} else{
    $num_of_rec = mysqli_num_rows($query);
    echo "Number of record = " . $num_of_rec;
}
mysqli_close($connection);
?>
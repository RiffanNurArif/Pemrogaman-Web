<?php

$connection = mysqli_connect("localhost", "root","","riffan_project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Succesfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP,
JURUSAN) VALUES('','Mas Pahmi','Jalan Solo-Purwodadi KM 12', '1999-12-12', 'K3519070', 'RPL')");
if(!$query_insert) {
    echo("Error query " . mysqli_error($connection));
}
mysqli_close($connection);
?>
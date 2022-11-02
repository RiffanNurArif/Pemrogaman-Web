<?php

$connection = mysqli_connect("localhost", "root","","riffan_project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Succesfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");
if (!$query){
    echo ("Error query" . mysqli_error($connection));
}
echo "<br> Hasil numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : " . $data[0] . "<br>";
    print "NAMA LENGKAP : " . $data[1] . "<br>";
    print "JURUSAN : " . $data[2] . "<br>";
}
mysqli_close($connection);
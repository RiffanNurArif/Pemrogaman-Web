<?php

$connection = mysqli_connect("localhost", "root", "", "sekolah1");
if(!$connection){
    echo mysqli_connect_error();
}
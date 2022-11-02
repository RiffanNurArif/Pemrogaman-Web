<?php

include "config.php";
$id + $_GET['id'];

$result =mysqli_query($conn_db, "DELETE FROM customers Where id=$id");

if ($result){
    $message = "Berhasil menghapus customer";
}else {
    $message = "Gagal menghapus customer";
}
header("Location:index1.php?message=".$message);
?>
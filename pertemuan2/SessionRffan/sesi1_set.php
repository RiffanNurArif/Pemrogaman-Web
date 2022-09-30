<?php

// Memulai sesi
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="x-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Latihan Session</title>
</head>

<body>
<?php
// BIkin session nama kalian masing-masing
$_SESSION['nama'] = "Riffan Nur Arif";

// Bikin session nomor absen kalian masing-masing
$_SESSION['absen'] = 24;

echo "HALO NAMA SAYA = " . $_SESSION['nama'] . "<br>" . "Nomor absen = " . $_SESSION['absen'];
?>

</body>

</html>
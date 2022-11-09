<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charshet="UTF_8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=2.0">
<title> Sesi 2 </title>
</head>

<body>
<?php
// echo / tampilkan variable sesei yang telah dibuat di file sesil.php

echo "Hallo, nama saya adalah " . $_SESSION['nama'] . "<br>";
echo "Nomor absen saya adalah " . $_SESSION['absen'];

?>
</body>
</html>
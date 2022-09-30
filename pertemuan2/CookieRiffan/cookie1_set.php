<?php
$cookie_name = "user";
$cookie_value = "Riffan Nur Arif";

setcookie($cookie_name, $cookie_value, time() + 3600, "/");
// Set cookie selama 1 jam
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initisl-scale=1.o">
<title>Cookie 1</title>
</head>

<body>
<?php
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie " . $cookie_name . "telah diatur!"<br/>;
    echo "Nilainya adalah  " . $_COOKIE[$cookie_name];
} else{
    echo "Nama Cookie ".$cookie_name."tidak diatur;
}

?>
</body>

</html>
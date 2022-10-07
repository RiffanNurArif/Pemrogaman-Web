<?php
session_start();
// membuat database / isikan dengan nama kamu
$database = [
'username' => 'rifan',
'password' => 'rifan123'
];
//cek apakah terdapat submit yang dilakukan
if(isset($_POST['submit'])){
    //mengambil nilai yabng dikirim melalui method phost ke dalam variabel
$username = $_POST['username'];
$password = $_POST['password'];
//mengecek apakah username dan password sesuai dengan database
if ($username ==$database['username'] && $password == $database['password']){
    $_SESSION['username'] = $username;
    header("location:admin.php");
} else {
    echo '<script> alert("Username atau password salah!");
    window.location="login=page.php; </script>';
}
}else {
    echo '<script> window.location="login-page.php"; </script>';
}
?>
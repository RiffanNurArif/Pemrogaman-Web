<?php
session_start();
if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charshet="UTF_8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css1.css" type="text/css" />
 <title>Register Page</title>
 </head>
 <body>
<a href="index.php">Go to Home</a>
<br/><br/>
 <form action="register_process.php" method="POST">
    <table width="25" border="0">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <select name="gender" id="gender">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </td>
        </tr>
        <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email"></td>
</tr>
<tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password"></td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Register"></td>
</tr>
    </table>
 </form>
 <br><br>
 Sudah memiliki akun? <a href="login-page.php">LOGIN</a>
 </body>
</html>


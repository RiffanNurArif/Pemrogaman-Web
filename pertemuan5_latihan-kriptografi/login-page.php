<?
// cek apakah ada username
if (isset($_SESSION['username'])) {
    header("Location:admin.php");
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
 <title>Login Page</title>
 </head>
 <body>
 <!-- pastikan action menuju ke auth.php dan method POST/post -->
 <form action="index.php" method="POST">
            <label for="username">Username:</label>
            <input name="username" type="text">
        <br />
            <label for="password">Password</label>
            <input name="password" type="password"/>
        <br/>
        <input type="submit" name="submit" value="Login">
        </form>
        </body>
        </html>
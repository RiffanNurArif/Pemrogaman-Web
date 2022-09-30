<?php
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

if(isset($_COOKIE['user'])) {
    echo "Cookie " . 'user' . "telah diatur!"<br/>;
    echo "Nilainya adalah  " . $_COOKIE['user'];
} else{
    echo "Nama Cookie ".$cookie_name."tidak diatur;
}


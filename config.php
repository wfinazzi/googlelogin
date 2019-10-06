<?php
    session_start();
    require_once "vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("245687578676-8s7vpm0ju565iqf17fjqtvqmjggtgcnv.apps.googleusercontent.com");
    $gClient->getClientSecret("rIjT15z_MhnExZ0jPLcBCDxm");
    $gClient->setApplicationName("CPI Login Tutorial");
    $gClient->setRedirectUri("http://localhost/googlelogin/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
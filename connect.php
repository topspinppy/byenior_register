<?php
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "byesenior";

    $connect = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($connect, "utf8");
    
?>
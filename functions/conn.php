<?php

    // Koneksi Database
    $_HOST  = "127.0.0.1";
    $_USER  = "root";
    $_PASS  = "";
    $_DB    = "sosial";

    // Menyimpan Koneksi ke dalam variable $conn
    $conn = mysqli_connect($_HOST, $_USER, $_PASS, $_DB) or die();
<?php

    // CONNECTION DATABASE
    $_HOST  = "127.0.0.1";
    $_USER  = "root";
    $_PASS  = ""; // sesuaikan dengan password sendiri2
    $_DB    = "sosial";

    $conn = mysqli_connect($_HOST, $_USER, $_PASS, $_DB) or die();
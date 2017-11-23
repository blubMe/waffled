<?php
    // Memasukkan semua fungsi lewat file init.php
    require_once('core/init.php');

    // Menghancurkan semua session
    session_destroy();

    // Menuju ke halaman index.php / login
    header('location: index.php');
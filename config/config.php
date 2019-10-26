<?php

    $server     = "localhost";
    $user       = "root";
    $password	= "pokadpokap";
    $database   = "marketreport";

    $dbconnect = mysqli_connect($server, $user, $password, $database) or die("Koneksi Gagal!" . mysqli_connect_error());

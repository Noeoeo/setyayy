<?php
    //mengkoneksikan applikasi dgn dataabase
    $koneksi = mysqli_connect("localhost", "root","", "database1");

    // cek koneksi
    if (mysqli_connect_errno()) {
        echo "koneksi database gagal : " . 
        mysqli_connect_errno ();  }
        ?>
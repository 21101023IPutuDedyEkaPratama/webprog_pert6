<?php
    /** 
     * Membuat koneksi 
     * 1. menyiapkan lokasi server, user nama dan password
     * 2. test koneksi
    */
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("koneksi ke DBMS mysql gagal");
    echo "koneksi ke DBMS Mysql sukses<br>";
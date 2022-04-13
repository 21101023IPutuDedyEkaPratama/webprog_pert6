<?php
    /**
     * menambahkan data ke table mhs
     * 1. buat koneksi
     * 2. buat script sql untuk insert data ke table mhs
     *      NIM, NAMA, Jurusan Tgl lahir, jk, Passcode
     * 3. execute point ke 2
     * 4. cek status
     * 5. close connection
     */
if(issset($_POST[txNIM])){
    include_once ("dbkoneksi2.php");

    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $talag = $_post["txTalag"];
    $jk = $_post["txJK"];
    $jr = $_post["txJR"];
    $pass = $_post["txPASS"];

    $sqlINSERT = "INSERT INTO mhs(NIM, NAMA JURUSAN, JK, TGLLAHIR, PASSCODE) VALUES
    ('"$nim"','"$nama"','"$jur"','"$jk','"$talag','"$pass"');";

    echo "sql: ". $sql . "<br>";
    
    $hsl = mysqli_query($cnn, $sqlINSERT);

    if($hsl){
        echo "insert data sukses<br>";
    }else{
        echo "insert data gagal<br>";
    }

    mysqli_close($cnn);
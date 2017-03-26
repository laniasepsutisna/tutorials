<?php
header("Access-Control-Allow-Origin: *");

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'angular';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));

// terima input data
$data = json_decode(file_get_contents('php://input'));

// ambil data dari nama dan kota
$nama = $data->nama;
$kota = $data->kota;

// query insert
$sql = "INSERT INTO users (nama, kota) VALUES ('$nama', '$kota')";

// echo pesan
if(mysqli_query($link, $sql)){
    $pesan = 'Input Berhasil';
}else{
    $pesan = 'Input Gagal';
}

echo $pesan;
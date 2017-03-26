<?php
header("Access-Control-Allow-Origin: *");

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'angular';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die('run query gagal');

$output = '';
while( $row = mysqli_fetch_assoc($result)){
    $output[] = $row;
}

echo json_encode($output);

?>
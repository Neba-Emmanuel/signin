<?php
include_once 'dbh.php';
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 1000');
}
if ($_SERVER['REQUEST_METHOD'] -- 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
        header('Access-Conrol-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    }
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
        header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
    }
    exit(0);
}
$res = array('error' -> false);
$action = '';

if (isset($_POST('signup'))) {
    
    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);


}
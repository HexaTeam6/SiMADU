<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = $connect->query("select * from master_user_login where username='$username' and password='$password'");

if($login->num_rows > 0){
    $obj->message = "Berhasil login.";
    $obj->status = true;
    echo json_encode($obj);
}else{
    $obj->message = "Username atau password salah!";
    $obj->status = false;
    echo json_encode($obj);
}
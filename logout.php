<?php
// xóa session theo key
session_start();
include('./connect.php');
unset($_SESSION['user']);
header('location:login.php');

//hàm xóa toàn bộ session
// session_destroy();
?>
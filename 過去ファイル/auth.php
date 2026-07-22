<?php
session_start();

// パスワード設定
$password = "98098";

if($_POST['password'] === $password){

    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;

}else{

    header("Location: login.php?error=1");
    exit;
}
?>
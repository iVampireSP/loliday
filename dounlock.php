<?php
$pwd = md5($_POST["password"]);
$pwd2 = $_COOKIE["password"];
if ($pwd === $pwd2) {
    setcookie("unlock","true");
    header("Location: pwdtrue.php");
}else{
    header("Location: pwdwrong.php");
}
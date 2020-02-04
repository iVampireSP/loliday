<?php
    if($_COOKIE["password"] == "") {
        echo '<script>alert("您没有设置密码。无需解锁。");</script>';
        header("Location: index.php");
    }else{}
    header("Location: index.php");
?>


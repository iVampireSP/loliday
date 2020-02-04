<?php   
        setcookie("name",$_POST["name"],time()+3600*24*365*100);
        setcookie("defaultengine",$_POST["defaultengine"],time()+3600*24*365*100);
        setcookie("ico",$_POST["ico"],time()+3600*24*365*100);
        setcookie("logo",$_POST["logo"],time()+3600*24*365*100);
        setcookie("background",$_POST["background"],time()+3600*24*365*100);
        if ($_POST["password"] == "") {
        }else{
        setcookie("password",md5($_POST["password"]),time()+3600*24*365*100);}
        if ($_POST["clear"] == "") {
        }else{
        header("Location: clear.php");}
        setcookie("unlock","false");
        header("Location: index.php");
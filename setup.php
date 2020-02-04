<?php

        setcookie("name",$_GET["name"],time()+3600*24*365*100);
        setcookie("title",$_GET["title"],time()+3600*24*365*100);
        setcookie("ico","https://www.loliday.cn/favicon.ico",time()+3600*24*365*100);
        setcookie("logo","https://www.loliday.cn/logo.png",time()+3600*24*365*100);
        setcookie("background","https://www.loliday.cn/bg.jpg",time()+3600*24*365*100);
        setcookie("setup","done",time()+3600*24*365*100);
        if ($_GET["password"] == "") {
        }else{
        setcookie("password",md5($_GET["password"]),time()+3600*24*365*100);}
        header("Location: index.php");

        // setcookie("name",htmlspecialchars($_GET["name"]),time()+3600*24*365*100);
        // setcookie("title",htmlspecialchars($_GET["title"]),time()+3600*24*365*100);
        // setcookie("bartitle",htmlspecialchars($_GET["bartitle"]),time()+3600*24*365*100);
        // setcookie("subbartitle",htmlspecialchars($_GET["subbartitle"]),time()+3600*24*365*100);
        // setcookie("setup","done",time()+3600*24*365*100);
        // if ($_GET["password"] == "") {
        //
        // }else
        // setcookie("password",md5(htmlspecialchars($_GET["password"])),time()+3600*24*365*100);
        // header("Location: ../index.php");<iframe src="time.php" style="border: 0px; width:550px; height:45px;">
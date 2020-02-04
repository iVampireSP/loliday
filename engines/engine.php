<?php
    $words = htmlspecialchars($_GET["s"]);
    $engine = $_COOKIE["defaultengine"];
    switch ($words) {
        case "设置":
            header("Location: settings.php");
        break;
        case "初始化":
            header("Location: welcome.php");
        break;
        case "高级搜索":
            header("Location: search.php");
        break;
    }
    switch ($engine) {
        case "baidu":
            header("Location: https://www.baidu.com/s?ie=utf-8&wd=$words");
        break;
        case "bing":
            header("Location: https://cn.bing.com/search?q=$words&ensearch=1&FORM=BESBTB");
        break;
        case "cn_bing":
            header("Location: https://cn.bing.com/search?q=$words");
        break;
        case "google":
            header("Location: https://www.google.com/search?q=$words");
        break;
        case "mijisou":
            header("Location: https://mijisou.com/?q=$words");
        break;
        case "sm":
            header("Location: https://m.sm.cn/s?q=$words");
        break;
        case "so":
            header("Location: https://www.so.com/s?src=www.loliday.cn&q=$words");
        break;
        case "sogou":
            header("Location: https://www.sogou.com/web?query=$words");
        break;
        case "wikipedia":
            header("Location: https://zh.wikipedia.org/w/index.php?search=$words");
        break;
        default:
            header("Location: https://cn.bing.com/search?q=$words");
    }
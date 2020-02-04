<!doctype html>
<html>
    <head>
    <meta http-equiv="refresh" content="5">
        <?php require_once("config/functions.php");?> <!-- 引入函数文件  -->
    </head>
    <body>
    <?php 
    $name = $_COOKIE["name"];
    $date = date("Y年m月d日 H时i分s秒");
        echo "您好呀，$name <br />现在的时间：$date 。";
    ?>
</body>
</html>
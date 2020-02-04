<?php
      if ($_COOKIE["setup"] == "") {
        setcookie("title","LoliDay[洛丽日常] Loli.Rocks[洛丽柔可]");
        setcookie("name","Master");
        setcookie("setup","default");
        setcookie("ico","https://www.loliday.cn/favicon.ico");
        setcookie("logo","https://www.loliday.cn/logo.png");
        setcookie("background","https://www.loliday.cn/bg.jpg",time()+3600*24*365*100);
        header ("Location: index.php");
       }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="referrer" content="never">
    <?php require_once("config/functions.php");indexHeader(); ?> <!-- 引入函数文件  -->
    </head>
    <body>
        <div class="center">
        <?php img1(); ?>
            
        
        <form name="quicksearch" method="GET" action="i.php">

                <input name="s" placeholder="输入内容并按回车键以开始" type="text" class="search an" autofocus="autofocus" autocomplete="off" required />

            
            <p>你好哇，<a href="settings.php" title="进入设置"><?php echo $name;?></a>。要试试&nbsp;<a href="advancedsearch.php" title="快速的使用搜索引擎指令进行准确的搜索">高级搜索</a>&nbsp;或&nbsp;<a href="search.php" title="在一个页面上跳转到多个搜索引擎进行搜索">高效搜索&nbsp;</a>吗？</p>
        </form>
        </div>
    </body>
</html>
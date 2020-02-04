<!DOCTYPE html>
<html>
    <head>
    <?php require_once("config/functions.php");?> <!-- 引入函数文件  -->
    <?php indexHeader(); ?>
    </head>
    <body>
        <div class="center">
            <?php img(); ?>
          <h2 >
              使用搜索引擎进行搜素
        </h2>
        <?php
        if ($_COOKIE["setup"] == "default") {
        echo "你还没有设置你的主页哦~";
        echo '<a   style="marign: 3px;" href="welcome.php">立即设置</a>&nbsp;<a   style="marign: 3px;" href="setup.php?name=Master&title=%E6%B4%9B%E4%B8%BD%E6%97%A5%E5%B8%B8+By+Loli.Rocks%E6%B4%9B%E4%B8%BD%E6%9F%94%E5%8F%AF&bartitle=LoliDay&subbartitle=%E6%B4%9B%E4%B8%BD%E6%97%A5%E5%B8%B8&password=">不再提示</a>';
        }elseif($_COOKIE["setup"] == "2"){

        }elseif($_COOKIE["setup"] == "done"){
            echo "您好呀，$name~";
        }
            else{

            }
        ?>
        <form name="keywords" method="get" action="#">
            <?php $keywords = $_GET["keywords"]?>
             <div>
                <input name="keywords" placeholder="输入内容并选择搜索引擎" value="<?php echo $keywords ?>" type="text" class="search an" autofocus="autofocus" autocomplete="off" required />
                <input name="submit" type="submit" class="hidden" />
            </div>
            <br />
            <input type="submit" formaction="engines/baidu.php" value="百度"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/sogou.php" value="搜狗"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/so.php" value="好搜"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/sm.php" value="神马"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/cn_bing.php" value="必应"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/bing.php" value="Bing"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/google.php" value="Google"   style="margin: 3px;">
           
            <input type="submit" formaction="engines/mijisou.php" value="秘迹"   style="margin: 3px;">
            
            <input type="submit" formaction="engines/wikipedia.php" value="Wikipedia"   style="margin: 3px;">
        </form>
        </div>
    </body>
</html>

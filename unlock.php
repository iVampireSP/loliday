<?php
    if($_COOKIE["password"] == "") {
        echo '<script>alert("您没有设置密码。无需解锁。");</script>';
        header("Location: index.php");
    }else{}
?>
<!DOCTYPE html>
<html>
    <head>
    <?php require_once("config/functions.php"); indexHeader();?> <!-- 引入函数文件  -->
    </head>
    <body class="center" background="<?php echo $background ?>">
        <div>
          <?php img(); ?>
          <h3>
              您访问的界面已经锁定。
        </h3>
        <form name="unlock" method="post" action="dounlock.php">
            <div>
                <input name="password" placeholder="输入密码并按回车键以开始" type="text" class="search an" autofocus="autofocus" autocomplete="off" required />
            </div>
        </form>


        
        </div>
    </body>
</html>

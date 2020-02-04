<?php
          if ($_COOKIE["password"] == "") {

          }
          elseif ($_COOKIE["unlock"] == "true"){
          }
            else{
            header("Location: unlock.php");
          }
        ?>
<!DOCTYPE html>
<html>
    <head>
    <?php require_once("config/functions.php"); indexHeader();?> <!-- 引入函数文件  -->
    </head>
    <body class="center">
        <div>
            <h2>
              设置您的主页。
            </h2>
        <form method="get" name="setup" action="setup.php">
            
            <div>
                <p>请问该如何称呼您？</p>
                <label>您的称呼</label>
                <input type="text" name="name" required/>
            </div>
            <div>
                <p>您想设置页面标题（浏览器标签页中显示的标题）的内容为？</p>
                <label >您想要的标题</label>
                <input  type="text" name="title" required value="洛丽日常" />
            </div>
            <div>
                <p>是否需要设置密码？设置密码后进入设置和欢迎界面需要密码才能进入。<br />如果您忘记密码，需要清除浏览器Cookie才能重新进入设置页面。<br />您的密码将会被加密保存至您的浏览器中，无人知晓。如果您不需要密码，可以留空。</p>
                <label >您想要密码。</label>
                <input type="password" name="password"/>
            </div> 
            <br />
            <input type="submit" name="submit" value="确认" />
        </form>


        </div>
    </body>
</html>

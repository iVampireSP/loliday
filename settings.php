<!DOCTYPE html>
<html>
    <head>
    <?php require_once("config/functions.php"); indexHeader();?> <!-- 引入函数文件  -->
    </head>
    <body class="center">
          <h2>
                设置
          </h2>
        <?php
          if ($_COOKIE["password"] == "") {

          }
          elseif ($_COOKIE["unlock"] == "true"){
          }
            else{
            header("Location: unlock.php");
          }
        ?>
        <form method="post" name="set" action="set.php">
            <div>
                <p>主页背景图片的地址（可以是本机地址，需要以file:///开头（如果不能显示，那就是被浏览器的安全策略阻止了。）</p>
                <label >背景图片地址</label>
                <input  type="text" name="background" value="<?php echo $background ?>"/>
            </div>
                <p>默认搜索引擎</p>
                <div>
                <select name="defaultengine">
                  <option value="baidu">百度</option>
                  <option value="bing">Bing</option>
                  <option value="cn_bing">必应</option>
                  <option value="google">Google</option>
                  <option value="mijisou">秘迹</option>
                  <option value="sm">神马</option>
                  <option value="sogou">搜狗</option>
                  <option value="wikipedia">维基百科</option>
                  </select>
                </div>

                <?php $ico = $_COOKIE["ico"]; ?>
                <div>
                  <p>自定义favicon.ico的URL链接。留空则不显示（不建议）。<br />默认为：https://www.loliday.cn/favicon.ico</p>
                  <label >输入URL</label>
                  <input  type="text" name="ico" value="<?php echo $ico ?>"/>
                </div>

                <?php $logo = $_COOKIE["logo"]; ?>
                <div>
                  <p>自定义logo.png的URL链接。留空则不显示（不建议）。<br />默认为：https://www.loliday.cn/logo.png</p>
                  <label >输入URL</label>
                  <input  type="text" name="logo" value="<?php echo $logo ?>"/>
                </div>
                


                <div>
                  <p>更改密码。留空则不更改。</p>
                  <label >输入密码</label>
                  <input type="password" name="password" />
                </div>

                <div>
                  <p>您的称呼。</p>
                  <label >输入称呼</label>
                  <input type="text" name="name" value="<?php echo $name ?>"/>
                </div>

                <div >
                  <p>重置数据。这将会重置LoliDay在您的浏览器上存储的所有Cookie，并无法撤销！<br />重置后，请重新打开浏览器。</p>
                  <label >输入任意值</label>
                  <input  type="text" name="clear" />
                </div>
                <input type="submit" name="submit" value="设置" />
        </form>
    </body>
</html>

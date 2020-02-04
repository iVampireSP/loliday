<!DOCTYPE html>
<html>
    <head>
    <?php require_once("config/functions.php");?> <!-- 引入函数文件  -->
    <?php indexHeader(); ?>
    </head>
    <body class="center">
        <div>
            <?php img(); ?>
          <label for="a_engine"><h2 >
              使用搜索引擎以进行高级搜素
        </h2></label>
        <?php
        if ($_COOKIE["setup"] == "") {
        echo "你还没有设置你的主页哦~";
        echo '<a style="marign: 3px;" href="welcome.php">立即设置</a>&nbsp;<a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" style="marign: 3px;" href="setup.php?name=Master&title=%E6%B4%9B%E4%B8%BD%E6%97%A5%E5%B8%B8+By+Loli.Rocks%E6%B4%9B%E4%B8%BD%E6%9F%94%E5%8F%AF&bartitle=LoliDay&subbartitle=%E6%B4%9B%E4%B8%BD%E6%97%A5%E5%B8%B8&password=">不再提示</a>';
        }elseif($_COOKIE["setup"] == "2"){

        }elseif($_COOKIE["setup"] == "done"){
            echo "您好呀，$name~";
        }
            else{

            }
        ?>
        <form name="keywords" method="get" action="as.php">
            <label for="a_engine">
                <p>选择搜索引擎与搜索方式</p>
            </label>
            <select  name="engine"  id="a_engine" required>
                <option value="baidu">百度</option>
                <option value="bing">Bing</option>
                <option value="cn_bing">必应</option>
                <option value="google">Google</option>
                <option value="mijisou">秘迹</option>
                <option value="sm">神马</option>
                <option value="so">好搜</option>
                <option value="sogou">搜狗</option>
                <option value="wikipedia">Wikipedia</option>
            </select>
            &nbsp;
            <select  name="as"  required>
                <option value="site:">[site]搜索指定网址下的内容。</option>
                <option value="intitle:">[intitle]查找包含关键词的页面。</option>
                <option value="allintitle:">[allintitle]同时查询多个包含关键词的页面。</option>
                <option value="link:">[link]查找URL的反向链接（只有Google支持）。</option>
                <option value="inurl:">[inurl]用于搜索查询呈现在url 中的页面。</option>
                <option value="allinurl:">[allinurl]与inurl相似，区别在于allinurl指令可以同时查询多个关键词。</option>
                <option value="filetype:">[filetype]搜索特定的文件格式。</option>
                <option value="yz">[""]完整匹配搜索。</option>
            </select>
            <br />
            <div>
                <br />
                <input name="s" placeholder="输入内容并按回车键以开始" type="text" class="search an" autofocus="autofocus" autocomplete="off" required />
            </div>
        </form>

        </div>
    </body>
</html>

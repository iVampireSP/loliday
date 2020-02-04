<?php 
    $title = $_COOKIE["title"];
    $name = $_COOKIE["name"];
    $ico = $_COOKIE["ico"];
    $logo = $_COOKIE["logo"];
    $background = $_COOKIE["background"];
// 结束
function indexHeader() {
  $title = $_COOKIE["title"];
  $ico = $_COOKIE["ico"];
  $background = $_COOKIE["background"];
  echo "
         <meta charset=\"utf-8\" />
         <link rel=\"shortcut icon\" href=\"$ico\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no \" />
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
         <meta name=\"renderer\" content=\"webkit\">
         <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
         <style type=\"text/css\">
         body {
          background-attachment: fixed;
          background-image: url($background);
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center 0;
         }
         </style>
         <title>$title</title>
 ";
}
function img() {
  $logo = $_COOKIE["logo"];
  echo "
    <a href=\"index.php\" title=\"返回主页\"><img src=\"$logo\" class=\"img\" /></a>
  ";
}
function img1() {
  $logo = $_COOKIE["logo"];
  echo "
    <a href=\"search.php\" title=\"高效搜索\"><img src=\"$logo\" class=\"img1\" /></a>
  ";
}
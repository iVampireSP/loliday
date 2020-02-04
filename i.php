<?php
    $words = htmlspecialchars($_GET["s"]);
    switch ($words) {
        case "s":
            header("Location: settings.php");
        break;
        case "w":
            header("Location: welcome.php");
        break;
        case "a":
            header("Location: search.php");
        break;
        default:
            header("Location: s.php?s=$words");
    }
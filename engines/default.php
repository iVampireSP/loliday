<?php
    $word = $_GET["quicksearch"];
    header("Location: engine.php?keywords=$word");
?>
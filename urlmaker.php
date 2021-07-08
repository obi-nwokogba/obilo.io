<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url, 'localhost') !== false) {
    // We are on localhost
    $homepage = "index.php";
    $javascriptpad = "javascriptpad.php";
    $csspad = "csspad.php";
    $phppad = "phppad.php";
    $gallery ="gallery.php";
    $coloreth = "index.php?p=top100";
    $filters = "picture_editor.php";
    $signuppage = "index.php?p=signup";
} else {
    // We are on production server
    $homepage = "/";
    $javascriptpad = "/illustratorpalette";
    $csspad = "/csspad";
    $phppad = "/phppad";
    $bibleverse = "bibleverse";
    $coloreth = "/coloreth/";
    $filters = "/filters";
}

<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url, 'localhost') !== false) {
    // We are on localhost
    $homepage = "http://localhost:8080/obilo.io/index.php";
    $javascriptpad = "javascriptpad.php";
    $csspad = "csspad.php";
    $phppad = "phppad.php";
    $rubypad = "rubypad.php";
    $contact = "contact.php";
} else {
    // We are on production server
    $homepage = "/";
    $javascriptpad = "/javascriptpad";
    $csspad = "/csspad";
    $rubypad = "/rubypad";
    $phppad = "/phppad";
    $contact = "/contact";
}

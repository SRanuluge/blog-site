<?php

session_start();

function splitURL()
{
    $URL = $_GET['url'] ?? 'home';
    $URL = explode('/', $URL);
    return $URL;
}

function loadController()
{
    $url = splitURL();
    $filename = '../app/controllers/' . ucfirst($url[0]) . '.php';
    if (file_exists($filename)) {
        require $filename;
    } else {
        $filename = '../app/controllers/_404.php';
        require $filename;
    }
}

function show($stuff)
{
    echo '<pre>';
    print_r($stuff);
    echo '</pre>';
}

loadController();

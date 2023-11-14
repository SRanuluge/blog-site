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
    if ($filename) {
        return $filename;
    } else {
        return 'not found';
    }
}

loadController();

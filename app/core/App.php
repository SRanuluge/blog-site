<?php

class App
{
    private function splitURL(): array|bool
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/', $URL);
        return $URL;
    }

    public function loadController(): void
    {
        $url = $this->splitURL();
        $filename = '../app/controllers/' . ucfirst($url[0]) . '.php';
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = '../app/controllers/_404.php';
            require $filename;
        }
    }
};

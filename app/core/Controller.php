<?php

class Controller
{
    /**
     * @param mixed $name
     */
    public function view($name): void
    {
        $filename = '../app/views/' . $name . '.view.php';
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = '../app/views/_404.view.php';
            require $filename;
        }
    }
}

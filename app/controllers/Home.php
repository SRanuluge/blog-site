<?php

class Home extends Controller
{
    public function index(): void
    {
        $this->view('home');
    }
}

echo 'home controller';
$home = new Home();
$home->index();

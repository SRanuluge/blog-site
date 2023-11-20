<?php

class Home extends Controller
{
    public function index(): void
    {
        $this->view('home');
    }
}

$home = new Home();
$home->index();

<?php

namespace App\core;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        $view = str_replace(
            '.',
            '/',
            $view 
        );
        require_once "../app/views/{$view}.php";
    }
}
<?php


namespace App\Core;

class Router
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // echo "{$method} {$uri}";
        // hhtps://google.com/search

        if($method == 'GET' && $uri == '/students') {
            require_once './app/controllers/StudentController.php';
            return;
        }

        if($method == 'GET' && $uri == '/students/create') {
            echo '<h1> dtambah siswa siswa </h1>';
            echo '<p> menampilkan form tambah siswa </p>';
            return;
        }


        http_response_code(404);
        echo '<h1>404 - Page Not Found';

    
    }
}

?>
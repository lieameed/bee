<?php


namespace app\core;

use app\controllers\StudentController;

class Router
{

    private array $routes = [];
    public function add(string $method, string $uri, string $controller, string $function)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'function' => $function,
        ];
    }
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'POST' && isset($_POST['_method'])) {
            $this->$_POST['method'];
        }

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            $pattern = str_replace(
                '{id}',
                '([0-9]+)',
                $route['uri']
            );

            $pattern = '#^' . $pattern . '$#';

            if ($method === $route['method'] && preg_match($pattern, $uri, $matches)) {
                require_once '../app/controllers/' . $route['controller'] . '.php';
                array_shift($matches);
                $controllerClass = 'app\\controllers\\' . $route['controller'];

                $controller = new $controllerClass();

                $function = $route['function'];
                call_user_func_array([$controller, $function], $matches);
                return;
            }

            // $controllerClass = 'app\\controllers\\' . $route['controller'];

            // $controller = new $controllerClass();

            // $function = $route['function'];
            // $controller -> $function();
        }

        // echo "{$method} {$uri}";
        // hhtps://google.com/search

        // if($method == 'GET' && $uri == '/students') {
        //     require_once '../app/controllers/StudentController.php';
        //     $controller = new StudentController();
        //     $controller -> index();
        //     return;
        // }

        // if($method == 'GET' && $uri == '/students/create') {
        //     require_once '../app/controllers/StudentController.php';
        //     $controller = new StudentController();
        //     $controller -> create();
        //     return;
        // }


        http_response_code(404);
        echo '<h1>404 - Page Not Found';


    }
}

?>
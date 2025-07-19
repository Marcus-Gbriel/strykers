<?php
require_once DOCUMENT_ROOT . '/routes/route_switch.php';

class router extends route_switch
{
    public function __construct()
    {
        $this->handleRequest();
    }

    private function handleRequest()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $route = explode('/', substr($_SERVER['REQUEST_URI'], 1))[0] == '' ? 'home' : explode('/', substr($_SERVER['REQUEST_URI'], 1))[0];
        $routes = $this->getRoutes();

        if (isset($routes[$method][$route])) {
            $return_route = $routes[$method][$route];
            $page = explode('@', $return_route)[0];
            $acess_page = explode('@', $return_route)[1];

            if ($acess_page == 'public') {
                require_once DOCUMENT_ROOT . '/' . $page;
            } else {
                #code...












                echo "por enquanto você não pode acessar essa página";
            }
        } else {
            require_once DOCUMENT_ROOT . '/pages/code/404.php';
        }
    }
}

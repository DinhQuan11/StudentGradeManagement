<?php
class App
{
    private $__controller;
    private $__action;
    private $__params;
    private $__routes;
    function __construct()
    {
        global $routes, $config;

        $this->__routes = new Route();

        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params = [];

        $this->handleUrl();
    }

    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }

    public function handleUrl()
    {

        $url = $this->getUrl();

        $url = $this->__routes->handleRoute($url);

        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        // Xử lý controller
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }

        if (file_exists('app/controllers/' . ($this->__controller) . '.php')) {
            require_once 'controllers/' . ($this->__controller) . '.php';

            // Kiểm tra clas $this->__controller tồn tại
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArr[0]);
            } else {
                $this->loadError();
            }
        } else {
            $this->loadError();
        }

        // Xử lý action
        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        // Xử lý params
        $this->__params = array_values($urlArr);

        // Kiểm tra method tồn tại
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadError();
        }
    }

    public function loadError($name = '404')
    {
        require_once 'views/errors/' . $name . '.html';
    }
}

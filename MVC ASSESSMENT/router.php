<?php

require 'Controller/userController.php';

class Router
{
    public $router = [];

    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri,$action)
    {
        $this->router[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=>'GET'
        ];
    }
    public function post($uri,$action)
    {
        $this->router[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=>'POST'
        ];
    }
    public function put($uri,$action)
    {
        $this->router[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=>'POST'
        ];
    }
    public function delete($uri,$action)
    {
        $this->router[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=>'POST'
        ];
    }

    public function router($serverUri,$serverMethod)
    {
        foreach ($this->router as $route){
            if($route['uri']==$serverUri && $route['method']==$serverMethod){
                $action = $route['action'];
                switch ($action){
                    case 'view':
                        $this->controller->view();
                        break;
                    case 'create':
                        $this->controller->create();
                        break;
                    case 'read':
                        $this->controller->read();
                        break;
                    case 'edit':
                        $this->controller->edit($_POST['edit']);
                        break;
                    case 'update':
                        $this->controller->update($_POST['update']);
                        break;
                    case 'delete':
                        $this->controller->delete($_POST['delete']);
                        break;
                }
            }
        }
    }
}

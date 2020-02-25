<?php
include_once __DIR__ . '/View.php';
include_once __DIR__ . '/MainController.php';


class Controller extends MainController
{
    protected $method;
    protected $view;

    public function view($viewName, array $data = [])
    {
        $this->view = new View($viewName, $data);
        return $this->view;
    }

    public function all($tableName)
    {
        $this->method = new Method();
        return $this->method->getAll($tableName);
    }

    public function one($tableName, $id)
    {
        $this->method = new Method();
        return $this->method->find($tableName, $id);
    }
}
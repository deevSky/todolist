<?php
include_once __DIR__ . '/MainController.php';
include_once __DIR__ . '/../models/User.php';
include_once __DIR__ . '/../models/Task.php';

class View extends MainController
{
    protected $viewName;
    protected $viewData;

    public function __construct($viewName, $viewData = [])
    {
        $this->viewName = $viewName;
        $this->viewData = $viewData;

        $filePath = 'views/' . $viewName . '.php';

        if (file_exists($filePath)) {
            include __DIR__ . '/../' . $filePath;
        } else {
            echo 'File not found error 404';
        }
    }
}
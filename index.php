<?php

if (!isset($_SESSION)) {
    session_start();
}

$url = explode('/', $_SERVER['REQUEST_URI']);
$controllerName = $url[1] . 'Controller';

if (isset($url[2]) && is_numeric($url[2])) {
    $actionName = $url[3];
    $id = $url[2];
} elseif (isset($url[2])) {
    $actionName = $url[2];
}

if ($url[1] == '') {
    include __DIR__ . '/controllers/TasksController.php';
    $controller = new TasksController;
    $controller->index();
} else {
    include __DIR__ . '/controllers/' . $controllerName . '.php';
    $controller = new $controllerName;
    $controller->$actionName(isset($id) ? $id : '');
}
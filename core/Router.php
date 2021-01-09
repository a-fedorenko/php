<?php

function getURI(){
    if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}

$result = null;

try {
    $routes = require_once CONFIG.'/routes.php';

}catch (Exception $e) {
    error_log($e->getMessage());
}

function getController($path){
    $segments = explode('\\', $path);
    list($controller, $action) = explode('@', array_pop($segments));
    $controllerPath = '/';
    foreach ($segments as $segment) {
        $controllerPath .= $segment.'/';
    }
    return [$controllerPath, $controller, $action];
}

// иннициализация контроллера ??
function initController($controllerPath, $controller, $action, $result=null) {
    $controllerPath = CONTROLLERS.$controllerPath.$controller.'.php';
    if (file_exists($controllerPath)) {
        include_once $controllerPath;
        $controller = new $controller();
        $controller->$action();
        $result = true;
    }
    return $result;
}

foreach ($routes as $key => $value) {
    if($key == getURI()){
        $result = initController(...getController($value));
        break; 
    }
}

if($result == null) {
    include_once CONTROLLERS.'/ErrorController.php';
}
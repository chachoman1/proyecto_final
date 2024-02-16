<?php
    #require_once "models/DataBase.php";
    if (!isset($_REQUEST['c'])) {
        require_once "Controladores/Landing.php";
        $controller = new Landing;
        $controller->inicio();
    } else {
        $controller = $_REQUEST['c'];
        require_once "Controladores/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'inicio';
        call_user_func(array($controller, $action));
    }
?>
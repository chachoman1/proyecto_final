<?php
    require_once "modelos/database.php";
    if (!isset($_GET['c'])) {
        require_once "Controladores/Landing.php";
        $controller = new Landing;
        $controller->inicio();
    } else {
        // Esto es
        $controllerName = $_REQUEST['c'];
        require_once "Controladores/" . $controllerName . ".php";
        $controller = new $controllerName; // Utilizar el nombre del controlador
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'inicio';
        call_user_func(array($controller, $action));
    }
?>

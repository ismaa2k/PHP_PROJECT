<?php
require_once('src/config.php');
require_once('src/home/handler.php');
require_once('src/scans/handler.php');
require_once('src/register/handler.php');
require_once('src/login/handler.php');

function route_request() {
    $uri = $_SERVER['REQUEST_URI'];

    switch ($uri) {
        case '/':
            handler_home();
            break;
        case '/scans':
            handler_scans();
            break;
        case '/scans2':
            handler_scans2();
            break;
        case '/scans3':
            handler_scans3();
            break;
        case '/scans4':
            handler_scans4();
            break;
        case '/scans5':
            handler_scans5();
            break;
        case '/scans6':
            handler_scans6();
            break;
        case '/scans7':
            handler_scans7();
            break;
        case '/scans8':
            handler_scans8();
            break;
        case '/login':
            handler_login();
            break;
        case '/register':
            handler_register();
            break;
        default:
            echo '404 NOT FOUND';
            break;
    }
}
route_request();
?>
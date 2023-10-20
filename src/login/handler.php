<?php
require_once ('src\login\view.php');
require_once ('src\login\model.php');

function handler_login(){
    $view = login_view();
    $request = request_login();
    echo $view;
    echo $request;
}
?>
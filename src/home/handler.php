<?php
require_once('src\home\model.php');
require_once('src\home\view.php');

function handler_home() {
    $view = view_home();
    $model = model_home();

    echo $view;
    echo $model;
}
?>

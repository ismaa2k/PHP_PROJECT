<?php
require_once('model.php');
require_once('view.php');

function handler_register() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'register') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                $result = register_user($username, $password, $email);

                if ($result) {
                    view_registration_success();
                } else {
                    view_registration_error();
                }
            }
        } else {
            view_register_form();
        }
    } else {
        view_register_form();
    }
}
?>
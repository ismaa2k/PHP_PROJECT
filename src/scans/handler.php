<?php
require_once('src/scans/model.php');
require_once('src/scans/view.php');

function handler_scans() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans') !== false) {
        $images = model_scans();
        view_scans();
    }
}

function handler_scans2() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans2') !== false) {
        $images = model_scans2();
        view_scans2();
    }
}

function handler_scans3() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans3') !== false) {
        $images = model_scans3();
        view_scans3();
    }
}

function handler_scans4() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans4') !== false) {
        $images = model_scans4();
        view_scans4();
    }
}

function handler_scans5() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans5') !== false) {
        $images = model_scans5();
        view_scans5();
    }
}

function handler_scans6() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans6') !== false) {
        $images = model_scans6();
        view_scans6();
    }
}

function handler_scans7() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans7') !== false) {
        $images = model_scans7();
        view_scans7();
    }
}

function handler_scans8() {
    $request_uri = $_SERVER['REQUEST_URI'];

    if (strpos($request_uri, '/scans8') !== false) {
        $images = model_scans8();
        view_scans8();
    }
}
?>

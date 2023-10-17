<?php
function view_scans() {
    $images = model_scans();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

if (!empty($images)) {
    echo '<div class="image-container">';
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="Image">';
    }
    echo '</div>';
} else {
    echo "Aucune image disponible.";
}
}

function view_scans2() {
    $images = model_scans2();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}

function view_scans3() {
    $images = model_scans3();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}

function view_scans4() {
    $images = model_scans4();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}

function view_scans5() {
    $images = model_scans5();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}

function view_scans6() {
    $images = model_scans6();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}

function view_scans7() {
    $images = model_scans7();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}

function view_scans8() {
    $images = model_scans8();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scans</title>

        <style>
        body {
            font-family: \'Poppins\', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar-container {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 60px;
        padding: 8px;
        padding-top: 15px;
        height: 60px;
        width: 99.1%;
        background-color: #007bff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-title {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }

    .navbar-links {
        display: flex;
        align-items: center;
    }

    .navbar-links a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

            .image-container {
                text-align: center;
                padding-top: 100px;
            }

            .image-container img {
                width: 50.1%;
            }
        </style>
    </head>
    <body>
    <div class="navbar-container">
    <a href="../">
    <h1 class="navbar-title">Isma\'s - Scans</h1> </a>
    <div class="navbar-links">
        <a href="../">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Scans</a>
            <div class="dropdown-content">
            <a href="../scans">Scans 1</a>
            <a href="../scans2">Scans 2</a>
            <a href="../scans3">Scans 3</a>
            <a href="../scans4">Scans 4</a>
            <a href="../scans5">Scans 5</a>
            <a href="../scans6">Scans 6</a>
            <a href="../scans7">Scans 7</a>
            <a href="../scans8">Scans 8</a>
            </div>
        </div>
        <a href="../login">Login</a>
        <a href="../register">Register</a>
    </div>
</div>';

    if (!empty($images)) {
        echo '<div class="image-container">';
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        echo '</div>';
    } else {
        echo "Aucune image disponible.";
    }

    echo '</body>
    </html>';
}
?>
<?php
session_start();
function view_register_form() {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
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

            .container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                text-align: center;
                margin-top: 280px;
                
            }
            .container h2 {
                font-size: 24px;
            }
            .container form {
                text-align: left;
            }
            .container label {
                display: block;
                margin-bottom: 5px;
            }
            .container input {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            .container input[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 3px;
                padding: 10px 15px;
                cursor: pointer;
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
        </div>
        <div class="container">
            <h2>Inscription</h2>';

    if (isset($_SESSION["register_error"])) {
        echo '<p style="color: #ff0000;">' . $_SESSION["register_error"] . '</p>';
        unset($_SESSION["register_error"]);
    }

    echo '<form method="post" action="">
                <label for="username">Nom d\'utilisateur:</label>
                <input type="text" name="username" required>
                <label for="email">Adresse e-mail:</label>
                <input type="email" name="email" required>
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" required>
                <input type="hidden" name="action" value="register">
                <input type="submit" value="S\'inscrire">
            </form>
            
            <p>Si vous avez déjà un compte, <a href="/login">connectez-vous ici</a>.</p>
        </div>
    </body>
    </html>';
}

function view_registration_success() {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Inscription réussie</title>
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
            .container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                text-align: center;
                margin-top: 100px;
            }
            .container h2 {
                font-size: 24px;
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
    </div>
        <div class="container">
            <h2>Inscription réussie</h2>
            <p>Vous êtes maintenant inscrit sur notre site.</p>
        </div>
    </body>
    </html>';
}

function view_registration_error() {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Erreur d\'inscription</title>
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
            .container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                text-align: center;
                margin-top: 100px;
            }
            .container h2 {
                font-size: 24px;
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
    </div>
        <div class="container">
            <h2>Erreur d\'inscription</h2>
            <p>Une erreur est survenue lors de l\'inscription. Veuillez réessayer.</p>
        </div>
    </body>
    </html>';
}
?>
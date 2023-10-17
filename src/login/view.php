<?php
session_start();
function login_view() {
    echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <style>
        /* Styles généraux */
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
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .container h2 {
            font-size: 24px;
            margin: 0;
            padding: 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .error-message {
            color: #f00;
            text-align: center;
        }

        .success-message {
            color: #008000;
            text-align: center;
        }

        form {
            margin: 0;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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
    <h2>Connexion</h2>';

    if (isset($_SESSION["login_error"])) {
        echo "<p class='error-message'>" . $_SESSION["login_error"] . "</p>";
        unset($_SESSION["login_error"]);
    }

    if (isset($_SESSION["login_success"])) {
        echo "<p class='success-message'>" . $_SESSION["login_success"] . "</p>";
        unset($_SESSION["login_success"]);
    }


    echo '<form action="/login" method="post">
        <label for="email">Email :</label>
        <input type="text" name="email" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>
        <input type="submit" value="Se connecter">
    </form>

    <p>Si vous n\'avez pas de compte, <a href="/register">inscrivez-vous ici</a>.</p>
    <p>Rafraichissez la page après votre connexion pour voir si elle a fonctionné !</p>
</div>
</body>
</html>';
}
?>
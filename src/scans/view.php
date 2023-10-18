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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
    <h2>Jujutsu Kaisen</h2>
    <p>Jujutsu Kaisen" est un manga populaire créé par Gege Akutami. L\'histoire tourne autour de Yuji Itadori, un lycéen ordinaire qui se retrouve plongé dans un monde de sorcellerie lorsqu\'il découvre un objet maudit, une relique puissante. Lorsqu\'il ouvre cette relique, il libère une malédiction dangereuse, ce qui l\'oblige à rejoindre une organisation secrète, le lycée de Jujutsu, qui se consacre à la lutte contre les malédictions et les êtres maudits.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
<h2>D.Gray-Man</h2>
<p>D.Gray-man" est un manga de Katsura Hoshino qui se déroule dans un monde alternatif de la fin du XIXe siècle. L\'histoire suit Allen Walker, un jeune exorciste qui fait partie de l\'Ordre noir, une organisation secrète chargée de combattre les Akumas, des créatures maléfiques créées par le Comte Millénaire. Le Comte Millénaire est un être diabolique qui a la capacité de manipuler les âmes des morts pour créer ces Akumas.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
<h2>One Piece</h2>
<p>One Piece" est un manga écrit et illustré par Eiichiro Oda, l\'un des mangas les plus populaires et les plus longs de tous les temps. L\'histoire se déroule dans un monde fantastique où les pirates sillonnent les mers à la recherche de trésors. Au cœur de cette aventure se trouve Monkey D. Luffy, un jeune pirate au corps élastique après avoir mangé un Fruit du Démon.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
    <h2>Death Note</h2>
    <p>Death Note" est un manga écrit par Tsugumi Ohba et illustré par Takeshi Obata. L\'histoire tourne autour d\'un carnet surnaturel appelé "Death Note" qui tombe entre les mains de Light Yagami, un étudiant brillant et désabusé.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
    <h2>Jojo\'s Bizarre Adventure Part.1</h2>
    <p>La première partie de "Jojo\'s Bizarre Adventure" est intitulée "Phantom Blood". Elle se déroule au 19e siècle en Angleterre et suit l\'histoire de Jonathan Joestar, surnommé JoJo, un noble au grand cœur, et son rival Dio Brando, un individu diabolique.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
    <h2>Jojo\'s Bizarre Adventure Part.2</h2>
    <p>La deuxième partie de "JoJo\'s Bizarre Adventure", également connue sous le nom de "Battle Tendency", suit l\'histoire de Joseph Joestar, petit-fils de Jonathan Joestar, le protagoniste de la première partie. L\'intrigue se déroule dans les années 1930 et se concentre sur Joseph alors qu\'il combat les forces du mal, notamment les Piliers, une race d\'anciens guerriers surpuissants qui menacent le monde.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
    <h2>Jojo\'s Bizarre Adventure Part.3</h2>
    <p>La troisième partie de "JoJo\'s Bizarre Adventure", intitulée "Stardust Crusaders", suit les aventures de Jotaro Kujo, petit-fils de Joseph Joestar, le protagoniste de la deuxième partie. L\'intrigue se déroule dans les années 1980 et se concentre sur Jotaro et un groupe d\'alliés qui entreprennent un voyage épique pour sauver la vie de la mère de Jotaro, Holly, en utilisant leurs pouvoirs spéciaux, appelés Stands.</p>
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
                padding-top: 30px;
            }

            .image-container img {
                width: 50.1%;
            }
            .site-description {
                text-align: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
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
<div class="site-description">
    <h2>Jojo\'s Bizarre Adventure Part.4</h2>
    <p>
    La quatrième partie de "JoJo\'s Bizarre Adventure" est intitulée "Diamond Is Unbreakable". Cette partie se déroule dans la ville fictive de Morioh, située au Japon. L\'intrigue suit Josuke Higashikata, le fils secret de Joseph Joestar, le protagoniste de la deuxième partie. Josuke possède un Stand appelé Crazy Diamond, qui lui permet de guérir et de restaurer les objets.</p>
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
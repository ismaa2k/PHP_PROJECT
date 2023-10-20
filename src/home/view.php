<?php
function view_home() {
    echo '
    <meta charset="utf-8">
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
    <h2>Bienvenue sur Isma\'s - Scans</h2>
    <p>Nous sommes une plateforme dédiée à la mise à disposition d\'un avant gout de scans de manga. Découvrez une vaste collection de mangas et explorez des histoires captivantes.</p>
</div>

<div class="image_home">
    <a href="../scans">
<img src="https://mangadex.org/covers/8b58f452-4d8a-4aad-a050-349e83fecccb/b1bb1063-dbf4-4ed6-b213-84997e19bed9.jpg"/></a>

<a href="../scans2">
<img src="https://mangadex.org/covers/b6886009-e60b-44a7-abc2-a575765277ba/2722ec59-83df-48ed-a97d-a3f22fefed5b.jpg"/></a>

<a href="../scans3">
<img src="https://mangadex.org/covers/a1c7c817-4e59-43b7-9365-09675a149a6f/ad643dbf-2891-48d4-8957-692570301f63.png"/></a>

<a href="../scans4">
<img src="https://mangadex.org/covers/75ee72ab-c6bf-4b87-badd-de839156934c/d6555598-8202-477d-acde-303202cb3475.jpg"/></a>

<a href="../scans5">
<img src="https://mangadex.org/covers/5a547d1d-576b-477f-8cb3-70a3b4187f8a/5336b1e8-48be-4ea9-bd66-d52b8b8112c0.jpg"/></a>

<a href="../scans6">
<img src="https://i.ibb.co/9GLysGr/698913b0-a66c-4ca0-bd3f-a8a0b8ddaebd-2.jpg"/></a>

<a href="../scans7">
<img src="https://mangadex.org/covers/0d545e62-d4cd-4e65-a65c-a5c46b794918/062dcbaa-fb90-4bd6-8894-6717c7d54339.jpg"/></a>

<a href="../scans8">
<img src="https://mangadex.org/covers/5ed1f8fc-a119-4cbc-aeae-26ce2bd3f838/99a4b427-5641-4b77-a506-3a9f2a2e9a3c.jpg"/></a>
</div>

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

.site-description {
    text-align: center;
    margin-top: 50px;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f5f5f5;
}

.image_home {
    text-align: center;
}

.image_home img {
    width: 16%;
    padding-top: 3%;
    margin: 0 20px;
}
</style>';
}
?>
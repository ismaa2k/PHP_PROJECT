<?php
$dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
$username = "postgres";
$password = "92150";

try {
    $pdo = new PDO($dsn, $username, $password);
    echo 'Connexion à la BDD réussie <br> ';
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

<?php
function register_user($username, $password, $email) {
    // Verification d'etre dans la bonne BDD avant de rentrer un nouveau User etc.
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        // Query de l'insertion de user dans ma BDD.
        $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = $stmt->execute([$username, $password, $email]);

        return $result;
    } catch (PDOException $e) {
        return false;
    }
}
?>
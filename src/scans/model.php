<?php
function model_scans() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (1, 2, 3, 4)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans2() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (5, 6, 7, 8)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans3() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (9, 10, 11, 12)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans4() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (13, 14, 15, 16)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans5() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (17)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans6() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (18,19)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans7() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (20, 21)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}

function model_scans8() {
    $dsn = "pgsql:host=localhost;dbname=project_php;port=5432;";
    $db_username = "postgres";
    $db_password = "92150";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);

        $sql = "SELECT manga_images FROM mangas WHERE id IN (22, 23)";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
        return false;
    }
}
?>

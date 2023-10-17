<?php
function request_login() {
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=project_php', 'postgres', '92150');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $email = $_POST["email"]; // Utilise le champ email du formulaire
            $password = $_POST["password"];
            $query = "SELECT * FROM users WHERE email = ?"; // Select l'email correspondant au formulaire dans la BDD

            $login = $bdd->prepare($query);
            $login->execute([$email]);
            $user = $login->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["login_success"] = "LOGIN réussie."; // Message de succès
                header("Location: /"); // Redirige vers home après une connexion réussie
                exit();
            } else {
                $_SESSION["login_error"] = "Erreur, Identifiants incorrects. Veuillez réessayer.";
                exit();
            }
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}
?>

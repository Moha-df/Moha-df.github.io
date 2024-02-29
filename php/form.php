<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $fullname = isset($_GET["inputName"]) ? $_GET["inputName"] : "";
    $email = isset($_GET["inputEmail"]) ? $_GET["inputEmail"] : "";
    $message = isset($_GET["inputMsg"]) ? $_GET["inputMsg"] : "";

    /////////// 

    $chemin = '../sqlite.db';

    // Connexion a la bdd
    $bdd = new PDO("sqlite:$chemin");

    $bdd->exec("CREATE TABLE IF NOT EXISTS formulaire (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        fullname TEXT NOT NULL,
        email TEXT NOT NULL,
        message TEXT NOT NULL
    )");

    // Prepare et lance les requetes
    $sqlInsert = "INSERT INTO formulaire (fullname, email, message) VALUES (:fullname, :email, :message)";
    $SqlRequete = $bdd->prepare($sqlInsert);
    $SqlRequete->bindParam(':fullname', $fullname);
    $SqlRequete->bindParam(':email', $email);
    $SqlRequete->bindParam(':message', $message);

    try {
        $SqlRequete->execute();
        echo "Donnés insérées avec succes.";
    } catch(PDOException $e) {
        echo "Erreur lors de l'insertion des donnés: " . $e->getMessage();
    }

    // free
    $bdd = null;

}
    //Recharge la page .
    header("Location: /contact.php");


<?php
class Form {
    private $fullname;
    private $email;
    private $message;
    private $bdd;

    public function __construct($fullname, $email, $message, $chemin) {
        $this->fullname = htmlspecialchars($fullname);
        $this->email = htmlspecialchars($email);
        $this->message = htmlspecialchars($message);
        $this->connectToDatabase($chemin);
    }

    private function connectToDatabase($chemin) {
        $this->bdd = new PDO("sqlite:$chemin");
        $this->bdd->exec("CREATE TABLE IF NOT EXISTS formulaire (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            fullname TEXT NOT NULL,
            email TEXT NOT NULL,
            message TEXT NOT NULL
        )");
    }

    public function insertData() {
        $sqlInsert = "INSERT INTO formulaire (fullname, email, message) VALUES (:fullname, :email, :message)";
        $SqlRequete = $this->bdd->prepare($sqlInsert);
        $SqlRequete->bindParam(':fullname', $this->fullname);
        $SqlRequete->bindParam(':email', $this->email);
        $SqlRequete->bindParam(':message', $this->message);

        try {
            $SqlRequete->execute();
            return "Donnés insérées avec succes.";
        } catch(PDOException $e) {
            return "Erreur lors de l'insertion des donnés: " . $e->getMessage();
        }
    }

    public function closeConnection() {
        $this->bdd = null;
    }
}

// Usage:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["inputName"];
    $email = $_POST["inputEmail"];
    $message = $_POST["inputMsg"];

    $chemin = '../sqlite.db';

    $form = new Form($fullname, $email, $message, $chemin);
    $form->insertData();
    $form->closeConnection();

    header("Location: /contact.php");
}


<?php

class SQLiteToJsonConverter {
    private $db;

    public function __construct($dbFilePath) {
        $this->db = new PDO("sqlite:$dbFilePath");
    }

    public function convertToJson($tableName) {
        $query = $this->db->prepare("SELECT * FROM $tableName");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }
}

// Usage example:
$converter = new SQLiteToJsonConverter("../sqlite.db");
$tableName = "projet";
$jsonData = $converter->convertToJson($tableName);
echo $jsonData;

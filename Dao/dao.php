<?php
    $servername = "localhost";
    $username = "root";
    $password = "passer";
    function connect_db() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=esp_news", 'root', 'passer');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>
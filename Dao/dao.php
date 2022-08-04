<?php
    $servername = "localhost";
    $username = "root";
    $password = "passer";
    function connect_db() {
        try {
            $conn = new PDO("pgsql:host=ec2-52-48-159-67.eu-west-1.compute.amazonaws.com;dbname=deb68r2nev2dc8;port=5432", 'nxhsgshhbkkcrq', '6214a80eae510711ae48371277f3bab97e3fdb9a1c028acf3cdb8438c895342e');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>
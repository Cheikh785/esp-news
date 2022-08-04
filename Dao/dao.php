<?php
    $servername = "localhost";
    $username = "root";
    $password = "passer";
    function connect_db() {
        try {
            $conn = new PDO("mysql:host=postgres://nxhsgshhbkkcrq:6214a80eae510711ae48371277f3bab97e3fdb9a1c028acf3cdb8438c895342e@ec2-52-48-159-67.eu-west-1.compute.amazonaws.com:5432/deb68r2nev2dc8;dbname=deb68r2nev2dc8", 'nxhsgshhbkkcrq', '6214a80eae510711ae48371277f3bab97e3fdb9a1c028acf3cdb8438c895342e');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>
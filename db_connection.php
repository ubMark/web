<?php
function getDBConnection() {
    $host = 'localhost';
    $dbname = 'online_learning_gamification'; 
    $username = 'root'; 
    $password = ''; 

    try {
        return new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>

<?php

$dbname = "bd_optima";
$user   = "root";
$pass   = "";
$host   = "localhost";
$charset = "utf8";

try {
    $opt = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=$charset", $user,  $pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

} catch (PDOException $e) {
    die("❌ Erreur de connexion à la base de données : " . $e->getMessage());
}

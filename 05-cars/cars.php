<?php

sleep(1);
// Connexion à la BDD
$db = new PDO('mysql:host=mysql.docker;dbname=cars;charset=utf8', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // On récupère les données en associatifs par défaut
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

header('Content-Type: application/json');

// Récupérer toutes les voitures en JSON
$cars = $db->query('SELECT * FROM cars')->fetchAll();
// Transformer le tableau en JSON (json_encode)
echo json_encode($cars);

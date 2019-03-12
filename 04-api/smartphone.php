<?php

// Connexion à la BDD
$db = new PDO('mysql:host=mysql.docker;dbname=smartphone;charset=utf8', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// On récupère les smartphones


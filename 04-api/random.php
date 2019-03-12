<?php

// Connexion à la BDD
$db = new PDO('mysql:host=mysql.docker;dbname=smartphone;charset=utf8', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/**
 * Ajouter les téléphones suivants dans la base
 *
 * Apple iPhone XS 899
 * Apple iPhone XR 999
 * Apple iPhone X 1199
 * Apple iPhone 8 799
 * Samsung Galaxy S10 999
 * Samsung Galaxy S9 599
 *
 * A chaque exécution du fichier, on pourra TRUNCATE la table pour éviter les doublons.
 */

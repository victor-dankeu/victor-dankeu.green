<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=dg4', 'root', '');
} catch (\Throwable $th) {
    die('Erreur de connexion a la base de données : '.$th->getMessage());
}

?>
<?php
$servername = "votre_serveur";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "votre_base_de_donnees";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>

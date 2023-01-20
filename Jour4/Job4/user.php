<?php
// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateurs";
$conn = new mysqli($host, $username, $password, $dbname);
// Vérifiez la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Récupérez tous les utilisateurs de la table
$query = "SELECT id, nom, prenom, email FROM utilisateurs";
$result = $conn->query($query);
$users = array();
if ($result->num_rows > 0) {
    // Stocker les résultats dans un tableau
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}
// Affichez les données au format json
header('Content-Type: application/json');
echo json_encode($users);
// Fermez la connexion
$conn->close();
?>
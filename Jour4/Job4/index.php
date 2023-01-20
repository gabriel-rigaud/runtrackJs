<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des utilisateurs</title>
</head>
<body style="background: cadetblue">
<table id="user-table">
  <thead>
  <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody id="user-table-body">
  <!-- Les lignes du tableau seront ajoutées ici lorsque les données sont récupérées -->
  </tbody>
</table>
<button id="update-button" onclick="updateTable()">Mise à jour</button>

<script>
  function updateTable() {
    // Utilisez fetch pour récupérer les données des utilisateurs à partir de la page PHP
    fetch("user.php")
            .then(response => response.json())
            .then(data => {
              // Récupérez le corps du tableau
              const tableBody = document.getElementById("user-table-body");
              // Supprimez toutes les lignes existantes
              tableBody.innerHTML = "";
              // Ajoutez les nouvelles lignes pour chaque utilisateur
              data.forEach(user => {

                const row = document.createElement("tr");
                const idCell = document.createElement("td");
                idCell.textContent = user.id;
                row.appendChild(idCell);
                const nameCell = document.createElement("td");
                nameCell.textContent = user.nom;
                row.appendChild(nameCell);
                const prenomCell = document.createElement("td");
                prenomCell.textContent = user.prenom;
                row.appendChild(prenomCell);
                const emailCell = document.createElement("td");
                emailCell.textContent = user.email;
                row.appendChild(emailCell);
                tableBody.appendChild(row);
              });
            });
  }
  // Appel de la fonction pour charger les données au démarrage de la page
  updateTable();
</script>
</body>
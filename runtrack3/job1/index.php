<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>HelloJS</title>
</head>
<body style="background-color: orchid">
<h1>bjr</h1>
<button id="myBtn" style="background-color: deepskyblue">Clique ici</button>
</body>
</html>
<script>
    function showPopup() {
        alert("Hello Javascript!");
    }

    // Appeler la fonction lorsque le bouton est cliqué
    document.getElementById("myBtn").addEventListener("click", showPopup);
</script>
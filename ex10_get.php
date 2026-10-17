<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat GET</title></head>
<body>
<h1>Traitement du formulaire GET</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] !== "GET" || !isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
    echo "<p>Veuillez remplir et envoyer le formulaire GET.</p>";
} else {
    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Erreur : tous les champs sont obligatoires.</p>";
    } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
        echo "<p>Erreur : groupe invalide.</p>";
    } else {
        echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, "UTF-8") . " " .
            htmlspecialchars($nom, ENT_QUOTES, "UTF-8") . " ! Groupe : " .
            htmlspecialchars($groupe, ENT_QUOTES, "UTF-8") . ".</p>";
        echo "<p>Avec GET, les valeurs apparaissent dans la barre d'adresse après le caractère ?.</p>";
    }
}
?>
<p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>
</html>
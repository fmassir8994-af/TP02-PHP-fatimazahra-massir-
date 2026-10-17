<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat POST</title></head>
<body>
<h1>Traitement du formulaire POST</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
    echo "<p>Veuillez remplir et envoyer le formulaire POST.</p>";
} else {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Erreur : tous les champs sont obligatoires.</p>";
    } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
        echo "<p>Erreur : groupe invalide.</p>";
    } else {
        echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, "UTF-8") . " " .
            htmlspecialchars($nom, ENT_QUOTES, "UTF-8") . " ! Groupe : " .
            htmlspecialchars($groupe, ENT_QUOTES, "UTF-8") . ".</p>";
        echo "<p>Avec POST, les valeurs ne sont pas ajoutées à la barre d'adresse.</p>";
    }
}
?>
<p><a href="ex10_post.html">Retour au formulaire</a></p>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 2</title></head>
<body>
<h1>Exercice 2 — Variables et concaténation</h1>
<?php
$nom = "fatima zahra ";
$prenom = "massir";
$age = 20;
$formation = "Développement informatique";

$presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age .
    " ans et je suis en " . $formation . ".";
$presentation .= " J'apprends PHP.";

$note = 12;
$Note = 16; // En PHP, les noms de variables sont sensibles à la casse.
echo "<p>" . htmlspecialchars($presentation, ENT_QUOTES, "UTF-8") . "</p>";
echo "<p>Valeur de \$note : " . $note . "</p>";
echo "<p>Valeur de \$Note : " . $Note . "</p>";
?>
<p>Variables valides : <code>$a</code>, <code>$_a</code>, <code>$a_a</code>, <code>$AAA</code> et <code>$a1</code>.</p>
<p>Variables invalides : <code>$a!</code> (caractère ! interdit) et <code>$1a</code> (un nom ne peut pas commencer par un chiffre).</p>
</body>
</html>

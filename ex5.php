<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 5</title></head>
<body>
<h1>Exercice 5 — Conditions et moyenne</h1>
<?php
$moyenne = 14; // Modifier cette valeur pour tester les autres cas.
if ($moyenne < 0 || $moyenne > 20) {
    echo "<p>Note invalide</p>";
} elseif ($moyenne < 10) {
    echo "<p>Moyenne : $moyenne — Non validé</p>";
} elseif ($moyenne < 12) {
    echo "<p>Moyenne : $moyenne — Passable</p>";
} elseif ($moyenne < 14) {
    echo "<p>Moyenne : $moyenne — Assez bien</p>";
} elseif ($moyenne < 16) {
    echo "<p>Moyenne : $moyenne — Bien</p>";
} else {
    echo "<p>Moyenne : $moyenne — Très bien</p>";
}
?>
<h2>Résultats des tests demandés</h2>
<table border="1" cellpadding="6">
<tr><th>Moyenne</th><th>Résultat</th></tr>
<?php
$tests = [-1, 9, 10, 12, 14, 16, 21];
foreach ($tests as $test) {
    if ($test < 0 || $test > 20) $message = "Note invalide";
    elseif ($test < 10) $message = "Non validé";
    elseif ($test < 12) $message = "Passable";
    elseif ($test < 14) $message = "Assez bien";
    elseif ($test < 16) $message = "Bien";
    else $message = "Très bien";
    echo "<tr><td>$test</td><td>$message</td></tr>";
}
?>
</table>
</body>
</html>

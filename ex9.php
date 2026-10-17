<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 9</title></head>
<body>
<h1>Exercice 9 — Tableau associatif des notes</h1>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
$somme = 0;
$nombreValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

echo '<table border="1" cellpadding="6">';
echo "<tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>";
foreach ($notes as $etudiant => $note) {
    $statut = ($note >= 10) ? "Validé" : "Non validé";
    echo "<tr><td>" . htmlspecialchars($etudiant, ENT_QUOTES, "UTF-8") . "</td><td>$note</td><td>$statut</td></tr>";
    $somme += $note;
    if ($note >= 10) $nombreValides++;
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }
}
echo "</table>";
$moyenne = $somme / count($notes);
echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenne</p>";
echo "<p>Nombre d'étudiants ayant validé : $nombreValides</p>";
echo "<p>Meilleure note : $meilleureNote, obtenue par " .
    htmlspecialchars($meilleurEtudiant, ENT_QUOTES, "UTF-8") . ".</p>";
?>
</body>
</html>

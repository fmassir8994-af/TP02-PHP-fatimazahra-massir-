<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 8</title></head>
<body>
<h1>Exercice 8 — Boucles et contrôle</h1>
<section>
<h2>1. Nombres pairs de 0 à 20</h2>
<?php
$nombre = 0;
while ($nombre <= 20) {
    if ($nombre === 10) echo "<strong>$nombre</strong> ";
    else echo "$nombre ";
    $nombre += 2;
}
?>
</section>
<section>
<h2>2. Comparaison while et do-while</h2>
<?php
$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}
echo "<p>Nombre d'exécutions de while : $executionsWhile</p>";

$compteur = 5; // Réinitialisation obligatoire.
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);
echo "<p>Nombre d'exécutions de do-while : $executionsDoWhile</p>";
?>
</section>
<section>
<h2>3. continue et break</h2>
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i >= 16) break;       // Arrêter avant d'afficher 16.
    if ($i % 3 === 0) continue; // Ignorer les multiples de 3.
    echo "$i ";
}
?>
</section>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 6</title></head>
<body>
<h1>Exercice 6 — Switch et mois</h1>
<?php
function nomMois(int $numeroMois): string {
    switch ($numeroMois) {
        case 1: return "Janvier";
        case 2: return "Février";
        case 3: return "Mars";
        case 4: return "Avril";
        case 5: return "Mai";
        case 6: return "Juin";
        case 7: return "Juillet";
        case 8: return "Août";
        case 9: return "Septembre";
        case 10: return "Octobre";
        case 11: return "Novembre";
        case 12: return "Décembre";
        default: return "Numéro de mois invalide";
    }
}
$numeroMois = 3;
echo "<p>Test avec 3 : " . nomMois($numeroMois) . "</p>";
echo "<h2>Tests</h2><ul>";
foreach ([1, 3, 12, 15] as $test) {
    echo "<li>$test : " . nomMois($test) . "</li>";
}
echo "</ul>";
$moisCourant = (int) date("m");
echo "<p>Mois courant du serveur : " . nomMois($moisCourant) . "</p>";
?>
</body>
</html>

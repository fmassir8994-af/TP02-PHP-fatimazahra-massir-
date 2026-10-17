<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 3</title></head>
<body>
<h1>Exercice 3 — Constantes et calculs</h1>
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;
$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;
$totalTTC += 15; // Ajout des frais de livraison.

echo "<ul>";
echo "<li>Prix unitaire HT : " . number_format($prixUnitaireHT, 2, ',', ' ') . " " . DEVISE . "</li>";
echo "<li>Quantité : " . $quantite . "</li>";
echo "<li>Total HT : " . number_format($totalHT, 2, ',', ' ') . " " . DEVISE . "</li>";
echo "<li>TVA (" . TAUX_TVA . " %) : " . number_format($montantTVA, 2, ',', ' ') . " " . DEVISE . "</li>";
echo "<li>Total TTC avant livraison : " . number_format($totalHT + $montantTVA, 2, ',', ' ') . " " . DEVISE . "</li>";
echo "<li>Livraison : 15 " . DEVISE . "</li>";
echo "<li><strong>Montant final : " . number_format($totalTTC, 2, ',', ' ') . " " . DEVISE . "</strong></li>";
echo "</ul>";
echo defined("TAUX_TVA") ? "<p>La constante TAUX_TVA est définie.</p>" : "<p>TAUX_TVA n'est pas définie.</p>";
?>
</body>
</html>

<h1> Exercice 10 </h1>

<p> A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €. </p>

<h2> Resultat </h2>

<?php

$montantAPAyer=152;
$montantVerse=200;
$resteAPayer= $montantVerse-$montantAPAyer;

$billetDe10= intdiv($resteAPayer/10);
// $billetDe5= floor(($resteAPayer-$billetDe10*10)/5);
$billetDe5= intdiv(($resteAPayer % 10)/5);
$restePieces= $resteAPayer - ($billetDe10*10 + $billetDe5*5);
$piecesDe2= intdiv($restePieces/2);
$piecesDe1= $restePieces % 2;

echo "Montant à payer : $montantAPAyer €<br>";
echo "Montant versé : $montantVerse €<br>";
echo "Reste à payer : $resteAPayer €<br>";
echo "***************************************************<br>";
echo "Rendue de monnaie :<br>";
echo "$billetDe10 billets de 10 € - $billetDe5 billet de 5 € - $piecesDe2 pièce de 2 € - $piecesDe1 pièce de 1 €";

<h1> Exercice 4 </h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome </p>

<h2> Resultat </h2>

<?php

$phrase="Engage le jeu que je le gagne";

// enlever majuscule
$phraseMin=strtolower($phrase);

// enlever ' '
$list = str_replace(' ', '', $phraseMin);

$listInv=strrev($list);
$conditionVraie = $list == $listInv;
$conditionFausse = $list!= $listInv;

if ($conditionVraie){
    echo "La phrase « $phrase » est un palindrome.";
} else {
    echo "La phrase « $phrase » n'est pas un palindrome.";

}

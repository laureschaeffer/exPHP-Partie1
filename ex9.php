<h1> Exercice 9 </h1>

<p> 
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
 </p>

<h2> Resultat </h2>

<?php

$age=32;
$sexe="f";
$resultat=" ";

if($sexe === "f" && $age>=18 && $age <=35 || $sexe === "h" && $age>20) {
    $resultat="est imposable.";
} else{
    $resultat="n'est pas imposable.";
}
echo "La personne $resultat";

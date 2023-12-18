<h1>Exercise 14</h1>

<p> Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
    Date courante: 18/12/2023. Date d'anniversaire de la personne: 17/01/1985 </p>

<h2> Resultat </h2>

<?php
//Fonction "à la main"

// Date du jour 
$joursAjd=15;
$moisAjd=04;
$anneeAjd=2021;

// Anniversaire 
$jourNaissance=21;
$moisNaissance=04;
$anneeNaissance=1983;

$joursVecus= $joursAjd-$jourNaissance;
$moisVecus=$moisAjd-$moisNaissance;
$anneesVecues=$anneeAjd-$anneeNaissance;

// Conditions pour ne pas avoir de resultat negatif 

if ($joursVecus < 0){
    $joursVecus= (31+$joursVecus);
    $moisVecus= $moisVecus-1;
} ;

if ($moisVecus <=0){
    $moisVecus=12+$moisVecus;
    $anneesVecues=$anneesVecues-1;
}

echo "Age de la personne : $anneesVecues ans $moisVecus mois $joursVecus jours<br>";
// Fonctions natives, ici en jours

$date1=date_create("1985-01-17");
$date2=date_create("2023-12-18");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");

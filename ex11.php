<h1>Exercise 11</h1>

<p> Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau. </p>

<h2> Resultat </h2>

<?php
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);

for ($i = 0; $i < $nbMarques; $i++) { 
    echo $marques[$i]."<br>";
}
// ou alors avec foreach 
foreach($marques as $index => $marque) {
    echo ($index+1)." - ".$marque."<br>";
}
?>

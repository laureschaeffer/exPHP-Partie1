h1> Exercice 7 </h1>

<p> Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser. </p>

<h2> Resultat </h2>

<?php

$age = 5;
if($age>11) {
    echo "L'enfant est Cadet";
    }
    elseif($age>9) {
    echo "L'enfant est Minime";
    }
    elseif($age>7 ){
        echo "L'enfant est Pupille";
        }
    elseif($age>5) {
        echo "L'enfant est Poussin";
        }
    else{
        echo "La catégorie n'est pas gérée.";
    }
    

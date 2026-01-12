
<!-- Créez une fonction nommée “bonjour()”
Cette fonction prend en paramètre un booléen nommé “$jour”
➔ si le paramètre vaut true, la fonction doit afficher “Bonjour”
➔ si le paramètre vaut false, la fonction doit afficher “Bonsoir” -->




<?php

$jour = false;
function bonjour($jour){
    if ($jour == true) {
        echo "Bonjour";
    }else{
        echo "Bonsoir";
    }
}
bonjour($jour);
?>

<!-- Créez une fonction nommée “occurrences()”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str”
et un caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.

Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de
$char dans $str est : 2 -->



 
<?php

function occurrences($str, $char){
    // $list  = array( "b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "a", "e", "i", "o", "u", "y");
    $j = 0; // nbr d'occurence
    for ($i=0; $i <= strlen($str)-1 ; $i++) { 
    if ($str[$i] == $char) {
        $j++;
    }
  }
}
echo occurrences("bonjour", "o");""
?>
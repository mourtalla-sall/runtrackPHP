<!-- 
Créez une fonction nommée “calcule()” qui prend 3 paramètres :
➔ le premier est un nombre,
➔ le deuxième est un caractère contenant le type d’opération (+ ,-,*, /,%)
➔ le troisième est un nombre
La fonction doit retourner le résultat de l’opération. -->

<?php

// $operator = ["+" ,"-","*", "/","%"];

function calcule($nombre1, $operator, $nombre2){
        if ($operator == "+") {
            return $nombre1 + $nombre2;
        }elseif($operator == "-"){
            return $nombre1 - $nombre2;
        }elseif($operator == "*"){
            return $nombre1 * $nombre2;
        }elseif($operator == "/"){
            return $nombre1 / $nombre2;
        }elseif($operator == "%"){
            return $nombre1 % $nombre2;
        }else{
            return "  n'existe pas! ";
        }
    }
   
echo calcule(8,  "-", 4 );
?>
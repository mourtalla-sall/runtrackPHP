<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$longuer = strlen($str);

for ($i=0; $i < $longuer ; $i+= 2) { 
    echo("$str[$i] <br/>");
}


?>
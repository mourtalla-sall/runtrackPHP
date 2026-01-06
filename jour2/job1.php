<?php

 $i = 0;

for ($i=1; $i < 1338; $i++) { 
    if ($i === 42) {
        echo("<u><i> $i </i></u>");
    }
    echo("$i <br/>");
        if ($i ===  42) {
            continue;
        }
} 
//  echo implode("<br/>", range(1,1337));
//   if (range(42) === 42) {
//          echo("<u><i> $i </i></u>");
//     }

 ?>
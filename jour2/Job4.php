<?php

 $i = 0;

for ($i=1; $i < 101; $i++) { 
    if ($i % 3 == 0) {
            echo(" $i est Fizz  <br/> ");
    }
    elseif ($i % 5 == 0) {
            echo("$i est Buzz  <br/> ");
    }
    if($i % 3 == 0 && $i % 5 == 0){
            echo(" $i est FizzBuzz <br/> ");

    }
    else{
        echo(" $i <br/> ");
    }
       
} 



?>
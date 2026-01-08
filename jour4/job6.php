<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="job6.php" method="get" >
        <label for="nombre">Nombre</label> 
        <input type="text" name="nombre"> <br/>
           
        <input type="submit" value="envoyer">
    </form>
   


</body>
</html>


<?php

if(isset($_GET["nombre"])){
$afficher = $_GET["nombre"];

        if ($afficher % 2 == 0) {
            echo ("$afficher est paire");
        }else{
            echo ("$afficher est impaire");
        }; 
} 


?>





















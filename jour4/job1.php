<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="job1.php" method="get" >
        <label for="username">Username</label> 
        <input type="text" name="usermane"> <br/>
        <label for="secret">Password</label>
        <input type="password" name="secret" > <br/>   
        <input type="submit" value="envoyer">
    </form>
   


</body>
</html>


<?php
        if (count($_GET) > 0 ) {
            echo "le nombres d'argument est de : " .count($_GET);
        }
?>
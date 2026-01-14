<?php

setcookie('nbvisites', 0, time() + 3600, "/");


$increment = $_COOKIE['nbvisites'];
$increment += 1;
setcookie('nbvisites' , $increment, time() + 3600, "/");


   
if (isset($_POST['envoyer'])) {
    $_COOKIE['nbvisites'] = 0;
}

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compteur de visites</title>
    </head>
    <body>
        <h1>Compteur de visites job 2</h1>
        <p>Nombre de visites : <?php echo $_COOKIE['nbvisites']; ?></p>
        
        <form action="job2.php" method="post"> 
            <label for="">Réinitialiser ce compteur.</label>
            <input name="envoyer" type="submit" value="Réinitialiser">
        </form>
    </body>
    </html>
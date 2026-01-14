
<?php

session_start();

// Vérifier si la variable existe, sinon l'initialiser
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites'] += 1;

    
if (isset($_POST['envoyer'])) {
    $_SESSION['nbvisites'] = 0;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites job 1</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    
    <form action="" method="post"> 
        <label for="">Réinitialiser ce compteur.</label>
        <input name="envoyer" type="submit" value="Réinitialiser">
    </form>
</body>
</html>
<?php
session_start();
// $list = array();
// if (isset($_POST['prenom'])) {
//     $_POST['prenom'] = $list ;
// }
// $newList = [];
if (isset($_POST['envoyer'])) {
    // il faut inserer chaque nouveau prénom dans un tableau de prenom stocké dans SESSION
    // $newList = $_SESSION['Prenom'] ;
 
    // array_push($list, $newList  );
}

if(isset($_POST['envoyer'])){
    if(isset($_POST['prenom'])){
        array_push($_SESSION['prenom'], $_POST['prenom']);
    }
}

// var_dump($_SESSION);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compteur de visites</title>
    </head>
    <body>
        <h1>job 3</h1>
        
        <form action="job3.php" method="post"> 
            <label for="">Prénom</label>
            <input type="text" name="prenom">
             </br>
             </br>
            <label for="">afficher les prénom.</label>
            <input name="envoyer" type="submit" value="Envoyer">
        </form>

        <p>
        <?php  echo "<ul> ";
            if(isset($_SESSION['prenom'])){

                foreach ($_SESSION['prenom'] as  $value) {
                    echo '<li>' . $value . '</li>';
                };
                } else{
                    echo "Pas de prenom pour l'instant";
                }
                " 
            </ul>
        " ?>
        </p>

    </body>
    </html>
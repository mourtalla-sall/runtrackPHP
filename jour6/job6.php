<?php


$lien1 = "<link rel='styleshee' href='formulaire/style1.css' type='text/css' />";
$lien2 = "<link rel='styleshee' href='formulaire/style2.css' type='text/css' />";
$lien3 = "<link rel='styleshee' href='formulaire/style3.css' type='text/css' />";

if (isset($_POST['pets'])) {
    if ($_POST['pets'] == $_POST['style1']) {
        echo "<link rel='styleshee' href='formulaire/style1.css' type='text/css' />";   
        
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>otot</title>
    <link rel="stylesheet" type="text/css" href="formulaire/style3.css">
</head>
<body>
    <form action="job6.php" method="post">
        <label for="pet-select">Choisir un style</label> </br>
        <select name="pets" id="pet-select">
        <option value="">--Choisir option--</option>
        <option name="style1">Style1</option>
        <option value="style2">Style2</option>
        <option value="style3">Style3</option>
        </select></br>
        <input type="submit" id="btn" value="valider">
    </form> 
<?php
var_dump($_POST );
?>

</body>
</html>
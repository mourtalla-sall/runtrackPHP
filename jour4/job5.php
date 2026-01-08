<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="job5.php" method="post" >
        <label for="username">Username</label> 
        <input type="text" name="username"> <br/>
        <label for="secret">Password</label>
        <input type="password" name="secret" > <br/>   
        <input type="submit" value="envoyer">
    </form>
   


</body>
</html>


<?php
// $username = $_POST["username"];
// $secret = $_POST["secret"];
var_dump($_POST);

$base_user = "John";
$base_pass = "Rambo";

if(isset($_POST['username']) && isset($_POST['secret'])){

    if ($base_user == $_POST["username"] && $base_pass == $_POST["secret"]) {
        echo ("c'est pas ma guerre");
    }else{
        echo ("votre pire cauchemar");
    };  
}


?>





















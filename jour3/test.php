<?php

$users = ["Mourtalla", "Samba", "Maodo"];
array_push($users, "Amar", "Assane");
foreach($users as $user){
    echo ("$user <br/>") ;
};

$utilusateurs = [ 
    "prenom" => "Mourtalla",
    "nom" => "SALL",
    "age" => 22,
];
echo $utilusateurs["nom"];
echo("<br/>");
$cars = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($cars as $key => $car) {
    echo ("$car ");

};
echo("<br/>");

echo("je suis " .$utilusateurs["prenom"] ." " .$utilusateurs["nom"] ." j'ai " .$utilusateurs["age"] ." ans");
// echo $car["model"];

$prodtuits = [
    ["id" => 1, "nom" => "banana", "prix" => "13£"],
    ["id" => 2, "nom" => "pomme", "prix" => "18£"],
    ["id" => 3, "nom" => "orange", "prix" => "23£"],
    ["id" => 4, "nom" => "melo", "prix" => "25£"],
    ["id" => 5, "nom" => "patate", "prix" => "75£"],
];
echo("<br/>");

foreach ($prodtuits as $prodtuit) {
    echo '<ul>';
    foreach ($prodtuit as $information => $value) {
        echo '<li>' . $information . ' : ' . $value . '</li>';
    }
    echo '</ul>';
}
// foreach ($prodtuits as $key => $prodtuit) {
//     echo $prodtuits;

// }

?>



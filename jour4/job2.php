

<?php
// Créez un algorithme qui affiche dans un tableau HTML l’ensemble des
// arguments $_GET et les valeurs associées.

$cars = array("nom"=>"Ford", "model"=>"fussion", "year"=>2014);

// echo "<table>
//         <th>Clé</th> 
//         <th>Valeur</th>" ;

// foreach ($_GET as $key => $value) {
//     if (isset($_GET)) {
//     echo"<td>toto</td>";
 
//     }
    
    
// }
// echo "</table>";

echo "<table>

  <thead>
    <tr>
    <th>Clé</th>
    <th>valeur</th>
    </tr>
    </thead>";
    foreach ($_GET as $key => $value) {
        if (isset($_GET)) {
            echo"<tbody>
                <tr>
                    <th >$key</th>
                    <td >$value</td>
                </tr>
            </tbody>";
    }
}
  
echo "</table>";
?>








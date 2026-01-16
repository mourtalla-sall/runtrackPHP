<!-- En utilisant PHP, connectez-vous à la base de données “jour08”. À l’aide d’une
requête SQL, sélectionnez récupérer le nom des salles et le nom de leur étage.
Affichez le résultat de cette requête dans un tableau HTML. La première ligne
de votre tableau HTML doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données. -->




<?php
	// DSN (Data Source Name) de PDO
		$dsn = 'mysql:host=localhost; dbname=jour08; charset=utf8mb4';
		$username = 'root';
		$password = '';
 
		// Créer une instance PDO
		$pdo = new PDO($dsn, $username, $password);
 
 
		// Je prépare ma requête sql qui doit aller chercher 1 seule ligne de la table, celle où est inscrit l'ID unique récupéré via GET URL précédemment
		$sql = "SELECT etage.nom as nom_etage, salles.nom as nom_salle
        FROM salles
        JOIN etage
        ON salles.id_etage = etage.id";
        
		$req = $pdo->prepare($sql);
		$req->execute();
		$data = $req->fetchAll();
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
            <th scope="col">Nom de l'étage</th>
            <th scope="col">Nom de la salle</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $key => $value) {
               	$nomEtage = $value['nom_etage'];
				$nomSalle = $value['nom_salle'];
				
                echo"
                <tr>
                    <th scope='row'>$nomEtage</th>
                    <th >$nomSalle</th>
                </tr>";
        
            }

        ?>
           
        </tbody>
        </table>

    
</body>
</html>
<!-- En utilisant PHP, connectez-vous à la base de données “jour08”. À l’aide d’une
requête SQL, sélectionnez le prénom, le nom et la date de naissance des
étudiants qui sont nés entre 1998 et 2018. Affichez le résultat de cette requête
dans un tableau HTML. La première ligne de votre tableau HTML doit contenir
le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->



<?php
	// DSN (Data Source Name) de PDO
		$dsn = 'mysql:host=localhost; dbname=jour08; charset=utf8mb4';
		$username = 'root';
		$password = '';
 
		// Créer une instance PDO
		$pdo = new PDO($dsn, $username, $password);
 
 
		// Je prépare ma requête sql qui doit aller chercher 1 seule ligne de la table, celle où est inscrit l'ID unique récupéré via GET URL précédemment
		$sql = "SELECT prenom, nom, naissance
        FROM etudiants
        WHERE (naissance BETWEEN '1998-01-02'AND '2018-02-01')";
        
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
            <th scope="col">prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">naissance</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $key => $value) {
               	$nom = $value['nom'];
				$prenom = $value['prenom'];
				$naissance = $value['naissance'];
				
                echo"
                <tr>
                    <th scope='row'>$nom</th>
                    <th >$prenom</th>
                    <td>$naissance</td>
                </tr>";
        
            }

        ?>
           
        </tbody>
        </table>

    
</body>
</html>
<!-- En utilisant PHP, connectez-vous à la base de données “jour08”. À l’aide d’une
requête SQL, récupérez le nombre total d’étudiants dans une colonne
nommée “nb_etudiants”. Affichez le résultat de cette requête dans un
tableau HTML. La première ligne de votre tableau HTML doit contenir le nom
du champ. -->

<?php
	// DSN (Data Source Name) de PDO
		$dsn = 'mysql:host=localhost; dbname=jour08; charset=utf8mb4';
		$username = 'root';
		$password = '';
 
		// Créer une instance PDO
		$pdo = new PDO($dsn, $username, $password);
 
 
		// Je prépare ma requête sql qui doit aller chercher 1 seule ligne de la table, celle où est inscrit l'ID unique récupéré via GET URL précédemment
		$sql = "SELECT
        COUNT(*) as total
        FROM etudiants ";
 
		$req = $pdo->prepare($sql);
		$req->execute();
		$data = $req->fetch(PDO::FETCH_ASSOC);
        
        var_dump($data);
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
                <th scope="col">Nombre etudiants</th>
            </tr>
        </thead>
        <tbody>
        <?php
         
            echo"
            <tr>
                <th scope='row'>" . $data['total'] ." </th>
            </tr>";

        ?>
           
        </tbody>
        </table>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - PDO météo</title>
</head>
<body>

<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=mountain;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$resultat = $bdd->query('SELECT * FROM météo');
$donnees = $resultat->fetch();//afficher le resultat
while ($donnees = $resultat->fetch())
{
?>
 <table class="table">
        <thead>
            <tr>
                <th><?php echo $donnees['ville']; ?></th>
                <th><?php echo $donnees['haut']; ?></th>
                <th><?php echo $donnees['bas']; ?></th>
            </tr>
        </thead>
<?php
}
$resultat->closeCursor();
?>

    <!-- <form action="" method="get">
        <select name="" id=""></select>


    </form> -->
</body>
</html>
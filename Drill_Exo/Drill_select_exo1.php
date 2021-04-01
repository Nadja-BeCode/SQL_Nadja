<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drill - Exercices: Select</title>
</head>
<body>

<h1>SQL: exercices select</h1>
<h2>Drill 1.</h2>
<p>Trouve la syntaxe pour effectuer chacune des requêtes suivantes (lis bien la formulation, chaque mot a son importance!). Vérifie
Retourne un tableau contenant </p>

<p><?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?></p>

*********************************************
<p><strong>1 - Uniquement les villes:</strong></p>

<p><?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?></p>
SOLUTION: SELECT ville FROM météo;
**********************************************
<p><strong>2 - Toutes les villes et leur température maximum:</strong></p>

<p><?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville, haut FROM météo');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . ' - '. $donnees['haut'] . '</p>';
   }
?></p>
SOLUTION: SELECT ville, haut FROM météo
**********************************************
<p><strong>3 - Toutes les villes et leur température minimum:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville, bas FROM météo');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . ' - '. $donnees['bas'] . '</p>';
   }
?>
SOLUTION: SELECT ville, bas FROM météo;
**********************************************
<p><strong>4 - Là où les villes dont la température maximale dépasse 27 degrés:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE haut > 27');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE haut > 27;
**********************************************
<p><strong>5 - Là où les villes dont la température minimale sera inférieure ou égale à 15 degrés:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE bas < 15');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE bas < 15;
**********************************************
<p><strong>6 - Là où les villes dont la température minimale sera égale à 15 degrés:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE bas = 15');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE bas = 15;
**********************************************
<p><strong>7 - Là où les villes dont la température minimale ne sera PAS égale à 15 degrés:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE bas <> 15');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE bas <> 15;
**********************************************
<p><strong>8 - Là où les villes dont le nom commence par "Br":</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE ville LIKE \'Br%\'');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE ville LIKE 'Br%';
**********************************************
<p><strong>9 - Là où les villes dont la température maximale se situe entre 26 et 28 degrés:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE haut BETWEEN 26 AND 28');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE haut BETWEEN 26 AND 28;
**********************************************
<p><strong>10 - Là où les villes dont la température minimale est égale à 14 ou est égale à 16 degrés:</strong></p>
<?php
   $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   $reponse = $bdd ->query('SELECT ville FROM météo WHERE bas =14 OR bas = 16');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['ville'] . '</p>';
   }
?>
SOLUTION: SELECT ville FROM météo WHERE bas =14 OR bas = 16;
**********************************************
<p><strong>11 - Là où les villes dont la température maximale est supérieure ou égale à 26 et la température minimale est inférieure à 14:</strong></p>
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  $reponse = $bdd ->query('SELECT ville FROM météo WHERE haut >=26 AND bas < 14');
  while($donnees = $reponse->fetch())
  {
     echo '<p>'. $donnees['ville'] . '</p>';
  }
?>
SOLUTION: SELECT ville FROM météo WHERE haut >= 26 AND bas < 14;
</body>
</html>
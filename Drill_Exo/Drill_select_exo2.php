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
<h2>Drill 2.</h2>
<p>Trouve la syntaxe pour effectuer chacune des requêtes suivantes </p>

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
<p><strong>1 - Affiche tous les octocats et leurs données:</strong></p>

<p><?php
  $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  $reponse = $bdd ->query('SELECT * FROM octocats');
  while($donnees = $reponse->fetch())
  {
     echo '<p>'. $donnees[''] . '</p>';
  }

?></p>
SELECT promo, firstname, lastname, gender, birthdate, age, github FROM octocats
**********************************************
<p><strong>2 - Affiche uniquement les prénoms:</strong></p>

<p><?php
     $bdd = new PDO('mysql:host=localhost;dbname=mountain','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
     $reponse = $bdd ->query('SELECT firstname FROM octocats');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['firstname'] . '</p>';
     }
?></p>
SELECT firstname FROM octocats
**********************************************
<p><strong>3 - Affiche les prénoms, noms et age de chaque octocat:</strong></p>
<?php
?>
SELECT firstname,lastname, age FROM octocats
**********************************************
<p><strong>4 - Affiche les octocats dont le nom commence par 'N':</strong></p>
<?php
?>
SELECT lastname FROM octocats WHERE lastname LIKE 'N%';
**********************************************
<p><strong>5 - Affiche le prénom et le nom des octocats de la promo "promo1-central":</strong></p>
<?php
?>
SELECT firstname, lastname FROM octocats WHERE promo LIKE '%al';
**********************************************
<p><strong>6 - SELECT firstname, lastname FROM octocats WHERE promo LIKE '%al';Toutes les villes et leur température maximum:</strong></p>
<?php
?>
SELECT firstname, lastname FROM octocats WHERE promo LIKE '%al';


    
</body>
</html>
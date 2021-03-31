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
<h2>Drill 4.</h2>


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
<p><strong>1 - Combien y a-t-il de garçons à Becode?:</strong></p>

<p><?php

?></p>
SELECT COUNT(*) FROM octocats WHERE gender='M';
**********************************************
<p><strong>2 - Combien y a-t-il de filles à Becode/Central ?:</strong></p>

<p><?php

?></p>
SELECT COUNT(*) FROM octocats WHERE gender='F' AND promo ="promo1-central";
**********************************************
<p><strong>3 - Combien y a-t-il de garçons à Becode/Central ?:</strong></p>
<?php
?>
SELECT COUNT(*) FROM octocats WHERE gender='M' AND promo LIKE '%al';
**********************************************
<p><strong>4 - Combien y a-t-il d'octocats dont le prénom est 'Nadia' à becode?:</strong></p>
<?php
?>
SELECT COUNT(*) FROM octocats WHERE firstname = 'Nadia';



**********************************************
<p><strong>5 - Sur ce nouveau [SQLFiddle](http://sqlfiddle.com/#!9/6b056/2), trouve la fonction permettant de n'afficher que l'année de la colonne "birthdate" et affiche le prénom de tous les octocts et leur année de naissance.  (indice: comment dit-on "année" en anglais?:</strong></p>
<?php
?>
**********************************************
<p><strong>6 - Trouve la fonction permettant de retourner un tableau contenant uniquement la température **maximale** prévue ("Demain le maxima observé en Belgique sera de ... degrés"):</strong></p>
<?php
?>
**********************************************
<p><strong>7 - Trouve la fonction permettant de retourner un tableau contenant uniquement la température **minimale** prévue ("Demain le minima observé en Belgique sera de ... degrés"):</strong></p>
<?php
?>

    
</body>
</html>
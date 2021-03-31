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
<h2>Drill 3.</h2>


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
<p><strong>1 - Affiche le prénom et nom de tous les octocats, par ordre alphabétique ascendant du prénom:</strong></p>

<p><?php

?></p>
SELECT firstname, lastname FROM octocats ORDER BY firstname ASC;
**********************************************
<p><strong>2 - Affiche le prénom et nom de tous les octocats, par ordre alphabétique descendant du nom de famille:</strong></p>

<p><?php

?></p>
SELECT firstname, lastname FROM octocats ORDER BY lastname ASC;
**********************************************
<p><strong>3 - Affiche le prénom, nom et âge de tous les octocats, du plus jeune au plus âgé:</strong></p>
<?php
?>
SELECT firstname, lastname, age FROM octocats ORDER BY age ASC;
**********************************************
<p><strong>4 - Affiche le prénom, nom et âge de tous les octocats, du plus âgé au plus jeune:</strong></p>
<?php
?>
SELECT firstname, lastname, age FROM octocats ORDER BY age DESC;
**********************************************
<p><strong>5 -Affiche le prénom, nom et âge de tous les octocats, du plus jeune au plus âgé, de la promo "promo1-central" Toutes les villes et leur température maximum:</strong></p>
<?php
?>
SELECT firstname, lastname, age FROM octocats WHERE promo LIKE '%al' ORDER BY age ASC;
**********************************************
<p><strong>6 - Affiche le prénom, nom et âge de tous les octocats, du plus jeune au plus âgé, de la promo "promo1-central" et dont l'âge se situe entre 23 et 28 ans:</strong></p>
<?php
?>
SELECT firstname, lastname, age FROM octocats WHERE promo LIKE '%al'AND age BETWEEN 23 AND 28;
**********************************************
<p><strong>7 - Affiche le prénom, nom, âge et genre de tous les octocats, du plus jeune au plus âgé, de la promo "promo1-central" et dont l'âge se situe entre 25 et 35 ans:</strong></p>
<?php
?>
SELECT firstname, lastname, age gender FROM octocats WHERE promo ='promo1-central' AND age BETWEEN 25 AND 35;
**********************************************
<p><strong>8 - Affiche le prénom, nom, âge et genre de tous les octocats, du plus jeune au plus âgé, de la promo "promo1-central", dont l'âge se situe entre 25 et 35 ans et dont le genre est masculin:</strong></p>
<?php
?>
SELECT firstname, lastname, age, gender FROM octocats WHERE age BETWEEN 25 AND 35 AND gender ='M'
**********************************************
<p><strong>9 - Affiche le prénom, nom, âge de l'octocat le plus âgé de Becode/Central. Donc tu dois obtenir un tableau avec une seule rangéeToutes les villes et leur température maximum:</strong></p>
<?php
?>
SELECT firstname, lastname, MAX(age) FROM octocats WHERE promo ='promo1-central';
    
</body>
</html>
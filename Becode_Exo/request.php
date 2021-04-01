<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becode - Students</title>
</head>
<body>

<h1>SQL: Students Becode</h1>

<p><?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mountain;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?></p>
<!--------------------------------NEED TO CHECK---------------------------------->

<p><strong>1 - Affiche toutes les données:</strong></p>

<p><?php
//    $reponse = $bdd ->query('SELECT idStudent, nom, prenom, datenaissance, genre, school  FROM students');
//    while($donnees = $reponse->fetch())
//    {
//       echo '<p>'. $donnees['students'] . '</p>';
//    }
?></p>
******************************************************************************************
<p><strong>2 - Affiche uniquement les prénoms:</strong></p>

<p><?php
     $reponse = $bdd ->query('SELECT prenom FROM students');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['prenom'] . '</p>';
     }
?></p>

******************************************************************************************
<p><strong>3 - Affiche les prénoms, les dates de naissance et l’école de chacun:</strong></p>

<p><?php
     $reponse = $bdd ->query('SELECT prenom, datenaissance, school FROM students');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['prenom'] . ':'.' Date de naissance :' . $donnees['datenaissance'] . ' : ' . $donnees['school'] . '</p>';
     }
?></p>

***********************************NEED TO CHECK *******************************************************
<p><strong>4 - Affiche uniquement les élèves qui sont de sexe féminin.:</strong></p>

<p><?php
    //  $reponse = $bdd ->query('SELECT COUNT(*) FROM students WHERE genre = 'F')';
    //  while($donnees = $reponse->fetch())
    //  {
    //     echo '<p>'. $donnees['genre'] . '</p>';
    //  }
?></p>

******************************************???????************************************************
<p><strong>5 - Affiche uniquement les élèves qui font partie de l’école Andy:</strong></p>

<p><?php
    //  $reponse = $bdd ->query('SELECT COUNT(*) FROM students WHERE ');
    //  while($donnees = $reponse->fetch())
    //  {
    //     echo '<p>'. $donnees['prenom'] . '</p>';
    //  }
?></p>

******************************************************************************************
<p><strong>6.1- Affiche uniquement les prénoms des étudiants, par ordre inverse à l’alphabet (DESC):</strong></p>

<p><?php
     $reponse = $bdd ->query('SELECT prenom  FROM students ORDER BY prenom DESC');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['prenom'] .'</p>';
     }
?></p>

******************************************************************************************
<p><strong>6.2 -Ensuite, la même chose mais en limitant les résultats à 2:</strong></p>

<p><?php
    $reponse = $bdd ->query('SELECT prenom  FROM students ORDER BY prenom DESC LIMIT 2');
    while($donnees = $reponse->fetch())
    {
       echo '<p>'. $donnees['prenom'] .'</p>';
    }
?></p>

************************************????????******************************************************
<p><strong>7 - Ajoute Ginette Dalor, née le 01/01/1930 et affecte-la à Central, toujours en SQL:</strong></p>

<p><?php
    //  $requete = $bdd ->prepare('INSERT INTO students (idstudent, prenom, nom, datenaissance,genre, school) VALUES (31,'Ginette','Dalor',19300101,'F', 1)');
    //  $requete ->execute(array($_GET['idstudent'], $_GET['prenom'], $_GET[nom], $_GET['datenaissance'], $_GET['genre'], $_GET['school']))
    
?></p>

***************************************??????***************************************************
<p><strong>8 - Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”:</strong></p>

<p><?php
     $reponse = $bdd ->query('SELECT prenom, datenaissance, school FROM students');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['prenom'] . '</p>';
     }
?></p>
************************************??????******************************************************
<p><strong>9 - Supprimer la personne dont l’ID est 3 :</strong></p>

<p><?php
     $reponse = $bdd ->query('SELECT prenom, datenaissance, school FROM students');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['prenom'] . '</p>';
     }
?></p>

**********************************????????********************************************************
<p><strong>11 - Modifier le contenu de la colonne School de sorte que "1" soit remplacé par "Central" et "2" soit remplacé par "Anderlecht". (attention au type de la colonne !):</strong></p>

<p><?php
     $reponse = $bdd ->query('UPDATE students SET school = 'Central' WHERE school = 1');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['students'] . '</p>';
     }
?></p

</body>
</html>


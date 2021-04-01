<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becode - Students</title>
</head>
<body>

<h1>SQL: PDO -CRUD1</h1>

<p><?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pdo-crud1;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?></p>
<!--------------------------------NEED TO CHECK---------------------------------->

<p><strong> Exercice 1 - Afficher tous les clients:</strong></p>

<p><?php
   $reponse = $bdd ->query('SELECT * FROM clients');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['id'] . ' - ' . $donnees['lastName'] . '  '. $donnees['firstName'] . ' : '. $donnees['birthDate'] . ' -> ' . $donnees['card'] . ' - ' . $donnees['cardNumber'] .'</p>';
   }
?></p>
******************************************************************************************
<p><strong>Exercice 2 - Afficher tous les types de spectacles possibles:</strong></p>

<p><?php
 $reponse = $bdd ->query('SELECT title FROM shows');
 while($donnees = $reponse->fetch())
 {
    echo '<p>'. $donnees['title'] .'</p>';
 }
    
?></p>

******************************************************************************************
<p><strong>Exercice 3 - Afficher les 20 premiers clients:</strong></p>

<p><?php
   $reponse = $bdd ->query('SELECT lastName, firstName FROM clients LIMIT 20');
   while($donnees = $reponse->fetch())
   {
      echo '<p>' . $donnees['lastName'] . '  ' . $donnees['firstName'] .'</p>';
   }
?></p>

******************************************************************************************
<p><strong>Exercice 4 - N'afficher que les clients possédant une carte de fidélité.:</strong></p>

<p><?php
     $reponse = $bdd ->query('SELECT lastName, firstName, cardNumber FROM clients WHERE cardNumber');
     while($donnees = $reponse->fetch())
     {
        echo '<p>'. $donnees['lastName'] . ' - ' . $donnees['firstName'] . ' - ' . $donnees['cardNumber'] . '</p>';
     }
?></p>

********************************************************************************************
<p><strong>Exercice 5 - Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M":</strong></p>

<p><?php
    //  $reponse = $bdd ->query('SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%'');
    //  while($donnees = $reponse->fetch())
    //  {
    //     echo '<p>'. $donnees['lastName'] . ' - ' . $donnees['firstName']  '</p>';
    //  }
?></p>

******************************************************************************************
<p><strong>Exercice 6 - Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci:</strong></p>

<p><?php
    $reponse = $bdd ->query('SELECT title, performer, date, startTime  FROM shows ORDER BY title ASC');
    while($donnees = $reponse->fetch())
    {
       echo '<p>'. $donnees['title'] . ' PAR: ' . $donnees['performer'] . ' ,LE ' . $donnees['date'] . ' A ' . $donnees['startTime'] . ' H ' .'</p>';
    }
?></p>

******************************************************************************************
<p><strong>Exercice 7 - Afficher tous les clients comme ceci:</strong></p>

<p><?php
   $reponse = $bdd ->query('SELECT lastName, firstName, birthDate, card, cardNumber FROM clients');
   while($donnees = $reponse->fetch())
   {
      echo '<p>'. $donnees['lastName']. ' - ' .$donnees['firstName']. ' - ' . $donnees['birthDate'] . ' - ' . $donnees['cardNumber']. ' - ' . $donnees['cardNumber'].'</p>';
   }
?></p>


</body>
</html>


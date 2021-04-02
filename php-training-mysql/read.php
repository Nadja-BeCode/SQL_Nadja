<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
      <p><?php
                try
                {
                  $bdd = new PDO('mysql:host=localhost;dbname=training-sql;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                }
                catch (Exception $e)
                {
                        die('Erreur : ' . $e->getMessage());
                }
      ?></p>


      <p><?php
        $reponse = $bdd ->query('SELECT * FROM hiking');
        while($donnees = $reponse->fetch())
        {
            echo '<p>'. $donnees['id'] . ' - ' . $donnees['name'] . '  '. $donnees['difficulty'] . ' : '. $donnees['distance'] . ' -> ' . $donnees['duration'] . ' - ' . $donnees['height_difference'] .'</p>';
        }
      ?></p>


    </table>
  </body>
</html>

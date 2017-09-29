<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo POO</title>
        <style>
            h1{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Programmation OO</h1>
        <?php

        function chargerClasse($classe) {
            require $classe . '.php';
        }

        spl_autoload_register('chargerClasse');

        try {
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'pass');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            Die('Erreur: ' . $e->getMessage());
        }

          $req = 'SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages';
          $request = $db->query($req);

          while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) {
          $perso = new Personnage($donnees);

          echo 'ID: '.$perso->id().' Nom: '.$perso->nom().'<br/>';
          } 
 
    ?>
    </body>
</html>
<?php
   require_once('db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher le prénom et le nom des salarié</title>
</head>
<body>
     <h1>Liste des  des salarié</h1>
     <?php

     try
     {
         $sql = 'SELECT ville , villeID FROM alphorm.ville';
         $req   = $dbConnection->query($sql);
        //  while($data = $req->fetch(PDO::FETCH_ASSOC)) {

        //     echo $data['prenom'].' '.$data['nom'].'<br>';

        //    }
           while($data = $req->fetch(PDO::FETCH_OBJ)) {

            echo $data->ville.' '.$data->villeID.'<br>';

           }
        }catch(PDOExeption $e)
        {
            echo 'Une erreur est survenue !';
        }
     ?>
</body>
</html>
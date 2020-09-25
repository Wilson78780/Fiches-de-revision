<!DOCTYPE html>
<html>
<head>
    <title> Liste des tâches </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Style/Style.css">
</head>
    <body>
        <script type="text/javascript" src="../JavaScript/Java.js"> </script>


        <?php include "../Style/Header.php" ?>


        <!--Text-->
        <span>
                <div style="float: left; margin-left: 2%; margin-top: 1%">
                    <img src="../Photos/Check.png" height="150" width="200" alt="Check">
                </div>
                <div class="text">
                    <h2> CDA - Wilson HUARD </h2>
                    <h3>Liste de tâche à effectuer par client </h3> </br>
                </div>
        </span>
        <div style="margin-left: 5px">
            <h1>Ajouter une tâche à la liste</h1>
            <form method="POST">
               <p>
                    <label>Nom de la tâche</label>
                    <input name='name_tache' type="text" placeholder="Tâche" required>


                    <label>Date</label>
                    <input name='date_tache' type="text" placeholder="Date" required>


                    <label>Importance</label>
                    <select name='importance_tache' size="1" required>
                        <option>--</option>
                        <option>Pas important</option>
                        <option>Normal</option>
                        <option>Important</option>
                    </select>

                   <label>Description</label>
                   <input name='description_tache' placeholder="Description" type="text" required>
                </p>
                <input id='submit' type="submit" value="Ajouter">
            </form>
        </div>

        </br>
        <?php
include"DB.php";
    if (isset ($_POST['name_tache']) && ($_POST['date_tache']) && ($_POST['importance_tache']) && ($_POST['description_tache']) )
        {
            Ajouter_tache($_POST['name_tache'],$_POST['date_tache'],$_POST['importance_tache'],$_POST['description_tache'] );

         }

        ?>

        <div style="margin-left: 5px">
            <h1>Supprimer une tâche</h1>

            <form method="POST">
                <label>Supprimer une tâche</label>
                <input name='supprimer_tache' placeholder="Tâche" type="text" required>

                <input id='submit' type="submit" value="Supprimer">
            </form>
        </div>


        <?php

        if (isset ($_POST['supprimer_tache']))
        {
            Supprimer_tache($_POST['supprimer_tache']);

        }

        $reponse = $db->query('SELECT * FROM Liste_tache');

        echo '<center><table style="text-align: center">';
        echo '<th style="width: 100px">Tâche</th>';
        echo '<th style="width: 100px">Date</th>';
        echo '<th style="width: 100px">Importance</th>';
        echo '<th style="width: 100px">Description</th>';
        echo '</tr>';

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
            echo '<tr>';
            echo '<td>' . $donnees['Nom_tache'] . '</td>';
            echo '<td>' . $donnees['Date'] . '</td>';
            echo '<td>' . $donnees['Importance'] . '</td>';
            echo '<td>' . $donnees['Description'] . '</td>';
            echo '</tr>';
        }
        echo '</table></center>';
        $pdo = null;


        $reponse->closeCursor(); // Termine le traitement de la requête


        ?>


        <?php include "../Style/footer.php" ?>

    </body>
</html>
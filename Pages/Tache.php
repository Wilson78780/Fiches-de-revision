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
             <div class="container">
                 <img src="../Photos/CDA_Cabinet.jpg" height="600" width="100%" alt="CDA cabinet">
                 <div class="text">
                     <h2> CDA - Wilson HUARD </h2>
                     <h3> Pour mieux s'organiser quoi de mieux que la liste des tâches ! </h3> </br>
                 </div>
             </div>
        </span>

        <!--Ajout une tâche-->
        <div style="margin-left: 5px">
            <form method="POST">
                <fieldset id="Ajout_tache">
                    <legend>Ajouter une tâche</legend>

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
                </fieldset>
            </form>
        </div>

        </br>

        <!--Voir si la tâche existe déjà + Insertion si elle n'existait pas-->
        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 2) { //Erreur Nom client
                echo "<p style='color:red'> La tâche existe déjà ! </p>";
            }
        }

        include"DB.php";
        if (isset ($_POST['name_tache']) && ($_POST['date_tache']) && ($_POST['importance_tache']) && ($_POST['description_tache']) )
            {
                $name_tache = $_POST['name_tache'];

                if (!verif_tache_existante($name_tache)) {
                    Ajouter_tache($_POST['name_tache'],$_POST['date_tache'],$_POST['importance_tache'],$_POST['description_tache'] );
                } else {
                    header('Location: Tache.php?erreur=2');
                }
             }
        ?>

        <!--Formulaire supression tâche-->
        <div style="margin-left: 5px">
            <form method="POST">
                <fieldset id="Suppression_Tache">
                    <legend>Supprimer une tâche</legend>

                    <input name='supprimer_tache' placeholder="Tâche" type="text" required>

                    <input id='submit' type="submit" value="Supprimer">
                </fieldset>
            </form>
        </div>

        <!--Suppression tâche + affichage tableau-->
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

        <!--Footer-->
        <?php include "../Style/footer.php" ?>

    </body>
</html>
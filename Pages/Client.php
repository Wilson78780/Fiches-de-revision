<!DOCTYPE html>
<html>
<head>
    <title> Client </title>
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
                     <h3> Liste des clients </h3> </br>
                 </div>
             </div>
        </span>

        <!--Ajouter un client-->
        <p>
            <div style="margin-left: 5px">
                <form method="POST">
                    <fieldset id="Ajouter un client">
                        <legend>Ajouter un client</legend>
                        <p>
                            <label>Nom du client</label>
                            <input name='nom_client' type="text" placeholder="Nom du client" required>


                            <label>Activité</label>
                            <input name='activite_client' type="text" placeholder="Activité" required>

                            <label>Statut</label>
                            <select name='statut_client' size="1" required>
                                <option>--</option>
                                <option>SA</option>
                                <option>SAS</option>
                                <option>SARL</option>
                                <option>EIRL</option>
                                <option>EI</option>
                                <option>EURL</option>
                                <option>SCI</option>
                            </select>

                            <label>Adresse</label>
                            <input name='adresse_client' type="text"  placeholder="Adresse" required>

                            <label>TVA</label>
                            <select name='tva_client' size="1" required>
                                <option>--</option>
                                <option>CA12</option>
                                <option>CA3</option>
                                <option>N/A</option>
                            </select>

                            <label>impôt</label>
                            <select name='impot_client' size="1" required>
                                <option>--</option>
                                <option>IS</option>
                                <option>BNC</option>
                                <option>BIC</option>
                                <option>BA</option>
                            </select>

                            <label>Social</label>
                            <select name='social_client' size="1"  required>
                                <option>--</option>
                                <option>Cabinet</option>
                                <option>Client</option>
                                <option>N/A</option>
                            </select>
                        </p>
                        <input id='submit' type="submit" value="Ajouter">
                    </fieldset>
                </form>
            </div>
        </p>

        <!--Récupération des données dans le formulaire à la DB-->
        <?php

        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 2) { //Erreur Nom client
                echo "<p style='color:red'> Le client est déjà existant ! </p>";
            }
        }

    include"DB.php";
    if (isset ($_POST['nom_client']) && ($_POST['activite_client']) && ($_POST['statut_client']) && ($_POST['adresse_client']) && ($_POST['tva_client']) && ($_POST['impot_client']) && ($_POST['social_client']) )
    {
        $nom_client = $_POST['nom_client'];

        if (!verif_client_existant($nom_client)) { //! avant pour l'inverse donc ils n'existent pas
            Ajouter_client($_POST['nom_client'], $_POST['activite_client'], $_POST['statut_client'], $_POST['adresse_client'], $_POST['tva_client'], $_POST['impot_client'], $_POST['social_client']);
        } else {
            header('Location: Client.php?erreur=2');
        }
    }

    ?>

        <!--Suppression client-->
        <div style="margin-left: 5px">
            <form method="POST">
                <fieldset id="Suppression_Client">
                    <legend>Supprimer un client</legend>

                    <input name='supprimer_client' type="text" placeholder="Nom client" required>

                    <input id='submit' type="submit" value="Supprimer">
                </fieldset>
            </form>
        </div>
        <br>
        <!--Récupération des données pour la DB-->
        <?php
        if (isset ($_POST['supprimer_client']))
        {
        Supprimer_client($_POST['supprimer_client']);

        }


        $reponse = $db->query('SELECT * FROM Liste_client');

        echo '<center><table style="text-align: center"> <tr>';
        echo '<th style="width: 100px">Nom client</th>';
        echo '<th style="width: 100px">Activité</th>';
        echo '<th style="width: 100px">Statut</th>';
        echo '<th style="width: 100px">Adresse</th>';
        echo '<th style="width: 100px">TVA</th>';
        echo '<th style="width: 100px">Impôt</th>';
        echo '<th style="width: 100px">Social</th>';
        echo '</tr>';

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
        echo '<tr>';
            echo '<td>' . $donnees['nom_client'] . '</td>';
            echo '<td>' . $donnees['activite_client'] . '</td>';
            echo '<td>' . $donnees['statut_client'] . '</td>';
            echo '<td>' . $donnees['adresse_client'] . '</td>';
            echo '<td>' . $donnees['tva_client'] . '</td>';
            echo '<td>' . $donnees['impot_client'] . '</td>';
            echo '<td>' . $donnees['social_client'] . '</td>';
            echo '</tr>';
        }
        echo '</table></center>';
        $pdo = null;


        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>

        <!--Information en bas footer-->
        <?php include "../Style/footer.php" ?>

    </body>
</html>
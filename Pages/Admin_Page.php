<!DOCTYPE html>
<html>
<head>
    <title> Page Accueil </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Style/Style.css">
</head>
    <body>
    <script type="text/javascript" src="../JavaScript/Java.js"> </script>

        <!--Header-->
        <?php include "../Style/Header.php" ?>

        <!--Text-->
        <span>
            <div class="container">
                    <img style="width:100%; height: 300px" src="../Photos/CDA_Cabinet.jpg" alt="CDA cabinet">
                <div class="text">
                        <h2> CDA - Wilson HUARD </h2>
                        <h3 style="margin-left: 10%;"> Bienvenue sur la page administrateur, ici vous pouvez gérer la base de donnée</h3> </br>
                </div>
            </div>
        </span>

        <!--Affichage de la DB-->
        <h2 style="text-align: center; margin-left: 5%">Liste des utilisateurs</h2>
        <?php include "DB_Utilisateurs.php" ?>

        <!--Suppression utilisateur-->
        <span style="text-align: center"
        <p>
            <h2>Supprimer utilisateur</h2>
            <form method="POST">
                <p id="Suppression_utilisateur"> <label> Pseudo :</label> <br>
                    <input type="text" placeholder="Entrez le pseudo que vous voulez supprimer"  name="suppression_utilisateur"> </p>

                <p> <input class="input_Enregistrer" type="submit" value="Supprimer"> </p>
            </form>
        </p>

        </span>
        <p>
            <?php

            if (isset ($_POST['suppression_utilisateur'])) {
                Supprimer_utilisateur($_POST['suppression_utilisateur']);
                header('Location: Admin_Page.php');

            }
            ?>
        </p>
        <br>
    </body>
</html>

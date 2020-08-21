<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Bienvenue</title>
    <!--Je vais mettre le style de police sur une page CSS prédéfinie-->
    <link rel="stylesheet" type="text/css" href="../Style/Style.css">
    </head>
    <body>
    <script type="text/javascript" src="../JavaScript/Java.js"> </script>

    <?php include "../Style/Header.php" ?>

    <!--Text-->
    <span>
			<div style="float: left; margin-left: 2%; margin-right: 2%;">
				<img src="../Photos/Mains.jpg" height="190" width="300" alt="Mains">
			</div>
			<div class="text">
				<h2> CDA - Wilson HUARD </h2>
				<h3> Actualité du cabinet, Séminaire, scéance de sport, rendez-vous, concours, réunion, changement, toutes informations communes </h3> <br>
			</div>
    </span>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div style="margin-left: 2%">
        <!--Liste de l'actualités à suivre-->
        <h2>  Réunion à venir </h2>
        <div style="color: #A4492A">Réunion</div>

        <form method="POST">
            <label style="color: #A4492A">Date</label>
            <input name='Date_reunion' type="text" required>

            <label style="color: #A4492A">Revue fiscale</label>
            <select name='Revue_fiduciaire' size="1" required>
                <option>--</option>
                <option>Oui</option>
                <option>Non</option>
            </select>
            <input id='submit' type="submit" value="Ajouter">
        </form>
        <br>

        <?php
        include"DB.php";
        if (isset ($_POST['Date_reunion']) && ($_POST['Revue_fiduciaire']) )
        {
            Reunion($_POST['Date_reunion'],$_POST['Revue_fiduciaire']);

        }
        ?>
        <br>
        <div style="color: #A4492A">Réunion à supprimer</div>
        <form method="POST">
            <label style="color: #A4492A">Date</label>
            <input name='date_supprimer' type="text" required>

            <input id='submit' type="submit" value="Supprimer">
        </form>
        <br>

        <?php
        if (isset ($_POST['date_supprimer']) )
        {
            Supprimer_reunion($_POST['date_supprimer']);

        }

        $reponse = $db->query('SELECT * FROM Reunion');

        echo '<center><table style="text-align: center">';
        echo '<th style="width: 100px">Date</th>';
        echo '<th style="width: 100px">Revue fiduciaire</th>';
        echo '</tr>';

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
            echo '<tr>';
            echo '<td>' . $donnees['Date'] . '</td>';
            echo '<td>' . $donnees['Revue_fiduciaire'] . '</td>';
            echo '</tr>';
        }
        echo '</table></center>';
        $pdo = null;


        $reponse->closeCursor(); // Termine le traitement de la requête


        ?>

        <h2>  Activités diverses </h2>
        <h3> Aucune information à ce sujet pour l'instant </h3>
        <br>

        <h2>  Séminaires </h2>
        <h3> Aucune information à ce sujet pour l'instant, si vous souhaitez consulté les photos du séminaire 2019 veuillez aller dans la rubrique photo </h3>
        <br>

        <h2>  Changement important </h2>
        <h3> Arriver Wilson HUARD à Bel Air à la rentrée, l'activité en télétravail est toujours de rigueur. </h3>
        <br>
    </div>


    <?php include "../Style/footer.php" ?>

    </body>
</html>
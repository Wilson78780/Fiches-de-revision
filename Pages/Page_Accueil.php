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
                    <img style="width:100%; height: 600px" src="../Photos/CDA_Cabinet.jpg" alt="CDA cabinet">
                <div class="text">
                        <h2> CDA - Wilson HUARD </h2>
                        <h3 style="margin-left: 10%;"> Je suis Wilson HUARD, élève en DCG bientôt en DSCG, ce site que j'ai créé va m'aider à m'orienter sur les tâches à réaliser au sein du cabinet nottament sur les deadlines à respecter comme la TVA ou déclaration des DAS, sur les nouveaux clients que j'ai et afin de mieux les connaître, leurs actvités, fiscalités, actualité sociale, pour une meilleur compréhension de mon portefeuille client. Enfin pour l'actualité/Veille autour du métier via la rubrique Actu & Pratique.</h3> </br>
                </div>
            </div>
        </span>

        </br>
        </br>
        </br>
    <!-- Liste de cours-->

    <div style="margin-left: 22%"
        <!--Client-->
        <div class="container" style="margin-left: 3%; width: 350px">
            <img src="../Photos/Clients.jpg" height="350" width="350" alt="CDA cabinet">
            <div class="text">
                <a style="text-decoration: none; color: white" href="Client.php">
                    <h2> Clients </h2>
                    <h3 style="margin-left: 10%;"> Liste des clients du porte-feuille</h3> </br>
                </a>
            </div>
        </div>

        <!--Actualité-->
        <div class="container" style="margin-left: 3%; width: 350px"">
            <img src="../Photos/Livre.jpg" height="350" width="350" alt="CDA cabinet">
            <div class="text">
                <a style="text-decoration: none; color: white" href="Connaissance.php">
                    <h2> Actualité </h2>
                    <h3 style="margin-left: 10%;"> Droit social, indiviuel, collectif et protection sociale, plus rien ne sera un secret pour vous.</h3> </br>
                </a>
            </div>
        </div>

        <!--Tâches-->
        <div class="container" style="margin-left: 3%; width: 350px"">
            <img src="../Photos/Check.png" height="350" width="400" alt="CDA cabinet">
            <div class="text">
                <a style="text-decoration: none; color: white" href="Tache.php">
                    <h2> Tâches </h2>
                    <h3 style="margin-left: 10%;"> Pour être sur d'avoir fait ce qu'il fallait</h3> </br>
                </a>
            </div>
        </div>

        <!--Photos-->
        <div class="container" style="margin-left: 3%; width: 350px"">
            <img src="../Photos/Smiley.jpg" height="350" width="400" alt="CDA cabinet">
            <div class="text">
                <a style="text-decoration: none; color: white" href="Photo.php">
                    <h2> Photos </h2>
                    )<h3 style="margin-left: 10%;"> Pour se re-mémorer de bons souvenirs</h3> </br>
                </a>
            </div>
        </div>

    </div>



    <?php include "../Style/footer.php" ?>

    </body>
</html>
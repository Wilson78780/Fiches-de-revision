<!DOCTYPE html>
<html>
<head>
    <title> Client </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Style/Style.css">
</head>
    <body>
        <script type="text/javascript" src="../JavaScript/Java.js"> </script>


        <!--bande en haut-->
        <span>
            <div id="Bande">
                <span id="logo2">
                <a href="Page_Accueil.php"> <img src="../Photos/CDA_Logo.png" height="40" width="90" id="Logo" alt="Logo"> </a>
                </span>
                <span id="liste">
                <div>
                    <ul>
                        <li> <a class="liste1" href="Client.php">Clients </a>
                            </li>
                        <li> <a class="liste2" href="Tache.php">Taches </a>
                            </li>
                        <li> <a class="liste3" href="Connaissance.php"> Actu &amp; Pratique </a>
                            </li>
                        <li> <a class="liste4" href="Actualite.php">Actualités du cabinet </a>
                            </li>
                        <li> <a class="liste5" href="Photo.php">Photos </a>
                            </li>
                        <li> <a class="liste6" href="mailto:huardwlison@gmail.com">Contact </a>
                            </li>
                    </ul>
                </div>
                </span>
            </div>
            </span>


        <!--Text-->
        <span>
                <div style="float: left;">
                    <img src="../Photos/Clients.jpg" height="205" width="400" alt="Clients">
                </div>
                <div class="text">
                    <h2> CDA - Wilson HUARD </h2>
                    <h3> La liste des clients pour mieux s'y retrouver </h3> </br>
                    <button class="favorite styled"
                            type="button"
                            style="margin-right: 9%">
                    Ajouter un client
                    </button>
                </div>
            </span>


        </br>
        </br>
        </br>
        </br>
        </br>

        <!--Les 3 photos en bas-->
        <div style="margin-left: 10%; margin-right: auto; width: 50%; margin-top: 20%">
            <div>
                <div class="rangement">
                    <figure>
                        <img src="../Photos/Fisca.jpg" alt="Icone" height="200" width="300">
                        <figcaption>
                            Besoin d'aide pour votre fiscalité ?
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="color: white;"> ;efbzefnz</div>

                <div class="rangement">
                    <figure>
                        <img src="../Photos/Social.jpg" alt="Une personne" height="200" width="300">
                        <figcaption>
                            Bulletin de salaire, cotisation sociale, nous sommes là !
                        </figcaption>
                    </figure>
                </div>

                <div class="rangement" style="color: white;"> ;efbzefnz</div>

                <div class="rangement">
                    <figure>
                        <img src="../Photos/Societe.jpg" alt="Une personne" height="200" width="300">
                        <figcaption>
                            Quel statut choisir ? Pourquoi ? Aide de création d'entreprise
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>


        <!--Information en bas footer-->
        <?php include "../Style/footer.php" ?>

    </body>
</html>
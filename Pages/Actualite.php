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

    <span>
		<div id="Bande"> <!--bande en haut-->
			<span id="logo2">
			<a href="Page_Accueil.php"> <img src="../Photos/CDA_Logo.png" height="40" width="90" id="Logo" alt="Logo"> </a>
			</span>
			<span class="liste">
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
        <h3> Aucune information à ce sujet pour l'instant </h3>
        <br>

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

    <?php include "../Style/footer.php" ?>

    </body>
</html>
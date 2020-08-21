<?php
    session_start(); //Sert à démarrer la session voir dans page utilisation dans le HTML
    // SI ON A CLIQUE SUR LE BOUTON DECONNEXION OU SI LA SESSION N'A PAS DE USERNAME -> REDIRECTION VERS LA PAGE DE CONNEXION
    if(isset($_GET['deconnexion']) OR !isset($_SESSION['username']))
    {
        session_unset();
        header("Location: Connexion.php");
    }
?>
<p>
    <span>
		<div id="Bande"> <!--bande en haut-->
			<span id="logo2">
			<a href="Page_Accueil.php"> <img src="../Photos/CDA_Logo.png" height="40" width="90" id="Logo" alt="Logo"> </a>
			</span>
			<span>
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
                        <!--Afficher le nom de l'utilisateur dans le header-->

                        <?php
                        if(isset($_SESSION['username'])){
                            $user = $_SESSION['username'];
                            echo "<li id='user_menu'>$user </li>";
                        }
                        echo "<a href=\"Connexion.php?deconnexion\"> <img src=\"../Photos/logout.png\" id=\"logo_deconnexion\" alt=\"logo_deconnexion\"> </a>";
                        ?>
                    </ul>
                </div>
			</span>
		</div>
    </span>
</p>

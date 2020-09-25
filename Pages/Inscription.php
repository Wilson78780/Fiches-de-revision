<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="../Style/Style.css">
</head>
    <div style="text-align: center">
        <span>
                <div class="container2">
                        <img style="width:100%; height: 400px" src="../Photos/CDA_Cabinet.jpg" alt="CDA cabinet">
                    <div class="text">
                            <h2> CDA - Wilson HUARD </h2>
                            <h3 style="margin-left: 10%;"> Je suis Wilson HUARD, élève en DCG bientôt en DSCG, ce site que j'ai créé a pour but l'apprentissage de la programmation et peut me servir pour mon organisation quotidienne.
                    </div>
        </span>
            <h1 class="ConnInsc">Inscription</h1>
            <form method="POST">
                <p>
                    <label>Nom d'utilisateur</label>
                    <input name='username' placeholder="Nom utilisateur" type="text" required>
                </p>

                <p>
                    <label>Adresse email</label>
                    <input name='email' placeholder="aur...@gmail.com" type="text" required>
                </p>

                <p>
                    <label> Mot de passe </label>
                    <input name='password' type="password" placeholder="Mot de passe" minlength="3" required>
                </p>
                <p>
                    <label>  Répété le mot de passe </label>
                    <input name='password2' type="password" placeholder="Mot de passe" minlength="3" required>
                </p>
                <input style="background-color: ghostwhite; margin-bottom: 20px" id="submit" type="submit" value="Se connecter" >
            </form>

            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==2) { //Erreur Username ou email
                    echo "<p style='color:red'> Utilisateur ou email déjà existant </p>";
                }
                else { ($err==3);
                   echo "<p style='color:red'> Les mots de passe ne sont pas identiques </p>"; //Erreur mot de passe pas identique
                }
            }
            ?>

            <a href="Connexion.php"> Connexion </a>
    </div>

    </body>
<?php
include"DB.php";
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']) ) { //Isset signifie si le formulaire est remplis et envoyer alors on traite sinon on fait rien.

    $password = hash('sha512', $_POST['password']);
    $password2 = hash('sha512', $_POST['password2']);

    if ($password==$password2){ //Si c'est le cas on réucupère les champs du formulaire email & username pour les traiter
        $email = $_POST['email'];
        $username = $_POST['username'];
        if (!verif_username_email_existant($username, $email)) { //! avant pour l'inverse donc ils n'existent pas
            Creation_utilisateur($username, $email, $password); //La fonction avec 3 variables qui sont les 3 données à intégrer dans la DB
        }
        else {
            header('Location: Inscription.php?erreur=2');
        }

    }
    else {
        header('Location: Inscription.php?erreur=3');
    }
}
?>

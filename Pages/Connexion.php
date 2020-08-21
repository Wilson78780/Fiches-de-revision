<?php
session_start(); //Sert à démarrer la session voir dans page utilisation dans le HTML
if (isset($_GET['deconnexion'])) {
    session_unset();
    header("Location: Connexion.php");
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="../Style/Style.css">
</head>

    <body>
       <span>
                <div class="container">
                        <img style="width:100%; height: 400px" src="../Photos/CDA_Cabinet.jpg" alt="CDA cabinet">
                    <div class="text">
                            <h2> CDA - Wilson HUARD </h2>
                            <h3 style="margin-left: 10%;"> Je suis Wilson HUARD, élève en DCG bientôt en DSCG, ce site que j'ai créé est à but d'apprentissage à la programmation et peut me servir pour mon organisation quotidienne.
                </div>
            </span>

       </br>
       </br>
       </br>
       </br>
       </br>
        <h1>Connexion</h1>
        <form method="POST">
            <p>
                <label>Nom d'utilisateur</label>
                <input name='username' type="text" required>
            </p>

            <p>
                <label> Mot de passe </label>
                <input name='password' type="password" minlength="3" required>
            </p>
            <input id="submit" type="submit" value="Se connecter" >
        </form>

    <?php
    if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1)
            echo "<p style='color:red'> Utilisateur ou mot de passe incorrect</p>";
    }
    // VERIFIE SI LA PERSONNE EST DEJA CONNECTEE -> SESSION A DEJA UN USERNAME
    else if(isset($_SESSION['username'])){
        echo "Vous êtes déjà connecté ! Vous allez être redirigé vers la page d'accueil.";
        header("refresh:3; url=Page_Accueil.php");
    }
    ?>

    </body>
<?php include"DB.php";
if (isset($_POST['username'])&& isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);
    if (verif_connexion($username, $password)) {
        header('Location: Page_Accueil.php');
    }
    else {
        header('Location: Connexion.php?erreur=1');
    }
}

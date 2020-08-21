<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" type="text/css" href="../../Style/Header_Footer.css">
</head>
    <body>
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

    <?php if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1)
            echo "<p style='color:red'> Utilisateur ou mot de passe incorrect</p>";
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

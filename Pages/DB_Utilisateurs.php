<?php
// DONNEES DE CONNEXION A LA BD
$servername = "mysql-wilsonh.alwaysdata.net";
$database = "wilsonh_78";
$db_username = "wilsonh";
$db_password = "Wilsonhuard78780";
$db = new PDO("mysql:host=$servername;dbname=$database", $db_username, $db_password); //oN REPRENDS LES VARIABLES POUR SE CONNECTER A LA BASE DE DONNEE
// set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Page ADministrateur
//Pour le tableau affichage des utilisateurs

try {
    $db = $db = new PDO("mysql:host=$servername;dbname=$database", $db_username, $db_password);

    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "SELECT * FROM `Connexion`";
    $resultat = $db->query($requete);
    try{
        echo ("<table style='width: 70%; margin: auto'>");
        echo ("<tr>");
            echo ("<th>pseudo </th>");
            echo ("<th>email </th>");
        echo ("</tr>");

        while ($donnees = $resultat->fetch())
        {
            echo ("<tr>");
                echo("<td>" . $donnees['username'] . "</td>");
                echo("<td>" . $donnees['email'] . "</td>");
            echo ("</tr>");

        }
        echo ("</table>");
    }
    catch (Exception $e){
        echo $e;
    }
} catch (PDOException $e){

    echo $e ->getMessage();
}

//Suppression utilisateur

function supprimer_utilisateur (String $supprimer_utilisateur) {
    $db = $GLOBALS['db'];
    try {
        $requete = $db->prepare("DELETE FROM `Connexion` WHERE username = :supprimer_utilisateur");

        $requete->bindParam("supprimer_utilisateur", $supprimer_utilisateur);
        $requete->execute();

        echo "L'utilisateur a été supprimé";

    }
    catch (PDOException $e) {
        echo $e;
    }
}
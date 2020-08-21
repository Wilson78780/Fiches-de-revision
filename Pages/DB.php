<?php
// DONNEES DE CONNEXION A LA BD
$servername = "mysql-wilsonh.alwaysdata.net";
$database = "wilsonh_78";
$db_username = "wilsonh";
$db_password = "Wilsonhuard78780";
$db = new PDO("mysql:host=$servername;dbname=$database", $db_username, $db_password); //oN REPRENDS LES VARIABLES POUR SE CONNECTER A LA BASE DE DONNEE
// set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function verif_connexion(String $username, String $password)
{

    $db = $GLOBALS['db'];
    try {
        $requete = $db->prepare("SELECT * FROM Connexion WHERE username = :username AND password = :password");
        $requete->bindParam('username', $username);
        $requete->bindParam('password', $password);

        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        if ($requete->rowCount() > 0) { // SI LE USERNAME EXISTE BIEN
            $_SESSION["username"] = $username;
            return true;
        }
        else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e;
    }
}
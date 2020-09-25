<?php
// DONNEES DE CONNEXION A LA BD
$servername = "mysql-wilsonh.alwaysdata.net";
$database = "wilsonh_78";
$db_username = "wilsonh";
$db_password = "Wilsonhuard78780";
$db = new PDO("mysql:host=$servername;dbname=$database", $db_username, $db_password); //oN REPRENDS LES VARIABLES POUR SE CONNECTER A LA BASE DE DONNEE
// set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//Inscription

//Vérification que le couple username et passord existe
//Si oui alors renvois true
//Sinon False
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

//Fonction savoir si le username existe déjà
//Si oui, message erreur
//Sinon vérification du email (autre fonciton)
function verif_username_email_existant (String $username, String $email) {

    $db = $GLOBALS['db'];
    try {
        $requete = $db->prepare("SELECT * FROM Connexion WHERE username = :username OR email = :email");
        $requete->bindParam('username', $username);
        $requete->bindParam('email', $email);

        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        if ($requete->rowCount() > 0) { //Voir s'il y a un username ou un email qui est déjà connu par DB
            return true;
        }
        else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e;
    }

}

//Comme il n'y a pas d'erreur on peut intégrer les éléments dans la DB
function Creation_utilisateur(String $username, String $email, String $password) {
    $db = $GLOBALS['db'];
   try {
       $requete = $db->prepare("INSERT INTO `Connexion`(`username`, `email`, `password`) VALUES (:username,:email,:password)");
       $requete->bindParam('username', $username);
       $requete->bindParam('email', $email);
       $requete->bindParam('password', $password);

       $requete->execute();
       echo "Compte créé, vous allez être rediriger vers la page de connexion";
       header('refresh:3; url=Page_Accueil.php'); //Puis redirection automatique vers la page d'acceuil
   }

    catch (PDOException $e) {
        echo $e;
    }
}



//Fonction ajouter une tâche


//Fonction savoir si le client existe déjà
//Si oui, message erreur

function verif_tache_existante (String $name_tache) {

    $db = $GLOBALS['db'];
    try {
        $requete = $db->prepare("SELECT * FROM `Liste_tache` WHERE `Nom_tache` = :name_tache");
        $requete->bindParam('name_tache', $name_tache);

        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        if ($requete->rowCount() > 0) { //Voir s'il y a un username ou un email qui est déjà connu par DB
            return true;
        }
        else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e;
    }

}

function Ajouter_tache (String $name_tache, String $date_tache, String $importance_tache, String $description_tache ) {
    $db = $GLOBALS['db'];
    try{
        $requete = $db->prepare("INSERT INTO `Liste_tache`(`Nom_tache`, `Date`, `Importance`, `Description`) VALUES (:name_tache,:date_tache,:importance_tache,:description_tache)");
        $requete->bindParam('name_tache', $name_tache);
        $requete->bindParam('date_tache', $date_tache);
        $requete->bindParam('importance_tache', $importance_tache);
        $requete->bindParam('description_tache', $description_tache);

        $requete->execute();
        echo "La tâche a été ajouter à votre liste";

    }
    catch (PDOException $e) {
        echo $e;
    }
}

//Fonction supprimer une tache
function Supprimer_tache(String $supprimer_tache){

    $db = $GLOBALS['db'];

    try{
        $requete = $db->prepare("DELETE FROM `Liste_tache` WHERE `Nom_tache`= :supprimer_tache");
        $requete->bindParam('supprimer_tache', $supprimer_tache);
        $requete->execute();
        echo"La tâche a été supprimé";

    }
    catch (PDOException $e) {
        echo $e;
    }
}



//Fonction ajouter un client dans la liste

//Fonction savoir si le client existe déjà
//Si oui, message erreur

function verif_client_existant (String $nom_client) {

    $db = $GLOBALS['db'];
    try {
        $requete = $db->prepare("SELECT * FROM `Liste_client` WHERE `nom_client` = :nom_client");
        $requete->bindParam('nom_client', $nom_client);

        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        if ($requete->rowCount() > 0) { //Voir s'il y a un username ou un email qui est déjà connu par DB
            return true;
        }
        else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e;
    }

}
function Ajouter_client (String $nom_client, String $activite_client, String $statut_client, String $adresse_client, String $tva_client, String $impot_client, String $social_client)
{
    $db = $GLOBALS['db'];

    try {
        $requete = $db->prepare("INSERT INTO `Liste_client`(`nom_client`, `activite_client`, `statut_client`, `adresse_client`, `tva_client`, `impot_client`, `social_client`) VALUES (:nom_client,:activite_client,:statut_client,:adresse_client,:tva_client,:impot_client,:social_client)");
        $requete->bindParam('nom_client', $nom_client);
        $requete->bindParam('activite_client', $activite_client);
        $requete->bindParam('statut_client', $statut_client);
        $requete->bindParam('adresse_client', $adresse_client);
        $requete->bindParam('tva_client', $tva_client);
        $requete->bindParam('impot_client', $impot_client);
        $requete->bindParam('social_client', $social_client);

        $requete->execute();
        echo "Le client a été ajouté";

    }

    catch (PDOException $e) {
        echo $e;
    }
}

//Fonction supprimer un client

function Supprimer_client(String $supprimer_client){

    $db = $GLOBALS['db'];

    try{
        $requete = $db->prepare("DELETE FROM `Liste_client` WHERE `nom_client`= :supprimer_client");
        $requete->bindParam('supprimer_client', $supprimer_client);

        $requete->execute();
        echo"Le client a été supprimé";
    }
    catch (PDOException $e) {
        echo $e;
    }
}

//Fonction ajouter réunion
function Reunion(String $Date_reunion, String $Revue_fiduciaire){

    $db = $GLOBALS['db'];

    try{
        $requete = $db->prepare("INSERT INTO `Reunion`(`Date`, `Revue_fiduciaire`) VALUES (:Date_reunion, :Revue_fiduciaire)");
        $requete->bindParam('Date_reunion', $Date_reunion);
        $requete->bindParam('Revue_fiduciaire', $Revue_fiduciaire);

        $requete->execute();
        echo"La réunion a été ajouté";
    }
    catch (PDOException $e) {
        echo $e;
    }
}

//Fonction Suppression reunion

function Supprimer_reunion(String $date_supprimer){

    $db = $GLOBALS['db'];

    try{
        $requete = $db->prepare("DELETE FROM `Reunion` WHERE `Date`= :date_supprimer");
        $requete->bindParam('date_supprimer', $date_supprimer);

        $requete->execute();
        echo"La réunion a été supprimé";
    }
    catch (PDOException $e) {
        echo $e;
    }
}


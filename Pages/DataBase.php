<?php
define('HOST','127.0.0.1');
define('DB_name','Clients');
define('USER','root');
define('PASS','root');

try {
    $db = new PDO("mysql:" . HOST . ";dbname" . DB_name, USER, PASS);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "SELECT * FROM Clients.user";
    $resultat = $db->query($requete);
    try{
        echo ("<table>");
        echo ("<tr>");
        echo ("<th>id </th>");
        echo ("<th>pseudo </th>");
        echo ("<th>email </th>");
        echo ("<th>date </th>");
        echo ("</tr>");

        while ($donnees = $resultat->fetch())
        {
            echo ("<tr>");

            echo("<td>" . $donnees['id'] . "</td>");
            echo("<td>" . $donnees['pseudo'] . "</td>");
            echo("<td>" . $donnees['email'] . "</td>");
            echo("<td>" . $donnees['date'] . "</td>");

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

?>
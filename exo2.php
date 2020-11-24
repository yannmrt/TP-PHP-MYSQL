<?php 

function afficher_requet_select($requete) {
    $sql = new PDO("mysql:host=localhost;dbname=martinExo2;charset=utf8;", "pi", "raspberry");

    $execRq = $sql->query($requete);

    ?>

    <table>
    <?php 

     while($req = $execRq->fetch()) {
        echo "<tr><td>" . $req["idPatient"] . " " . $req['nom'] . " " . $req['prenom'] . "</td></tr>";
     }
     ?>
    </table>

    <?php

}

// TEST DE CONNEXION A LA BASE DE DONNEE
try {
    $sql = new PDO("mysql:host=localhost;dbname=martinExo2;charset=utf8;", "pi", "raspberry");

    $useFonction = afficher_requet_select("SELECT * FROM patient");

} catch(Exception $e) {
    echo "Erreur lors de la connexion à la base de donnée";
}
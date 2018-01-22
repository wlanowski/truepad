<?php
//require für Datenbankverbindungseinstellungen
require_once(dirname(__DIR__) . '/dbconfig.php');



if (!empty($_POST)) {

    $pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_pass);
    $pdo->exec("set names utf8");

    $abfrage = 'UPDATE ' . $db_name . '.' . $db_pref.'aktuell SET lat = :u_lat, lng = :u_lng WHERE ID=1';

    $sql = $pdo->prepare($abfrage);

    $sql->bindParam(':u_lat', $_POST['fin-lat']);
    $sql->bindParam(':u_lng', $_POST['fin-lng']);


    $sql->execute();

    //$antwort = $sql->fetch();
    //echo $antwort;

    //$id = $pdo->lastInsertId();

    header('location:../admin_map.php');


} else {
    echo 'leer';
}
?>
<?php

//require für Datenbankverbindungseinstellungen
require_once(dirname(__DIR__) . '/dbconfig.php');

//print_r($_POST);

if (!empty($_POST)) {

    $pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_pass);
    $pdo->exec("set names utf8");




   // $abfrage = 'UPDATE ' . $db_name . '.' . $db_pref.'aktuell SET lat = :u_lat, lng = :u_lng WHERE ID=1';

    $abfrage = 'INSERT INTO '.$db_pref.'pois (name, lat, lng, gesperrt, icon) VALUES (:u_name, :u_lat, :u_lng, :u_gesperrt, :u_icon)';

    $sql = $pdo->prepare($abfrage);

    if(isset($_POST['poi-gesperrt'][0]))
    {
        $tmp=1;
    } else
    {
        $tmp=0;
    }
    $sql->bindParam(':u_gesperrt', $tmp);

    $sql->bindParam(':u_name', $_POST['poi-name']);
    $sql->bindParam(':u_lat', $_POST['poi-lat']);
    $sql->bindParam(':u_lng', $_POST['poi-lng']);
    $sql->bindParam(':u_icon', $_POST['poi-fa']);


    $sql->execute();

    //$antwort = $sql->fetch();
    //echo $antwort;

    //$id = $pdo->lastInsertId();

    //header('location:../admin_map.php');

} else {
    echo 'leer';
}
?>




<!-- aktuelle Position anzeigen -->

<?php


// Frage Aktuelle Position ab
$pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_pass);
$pdo->exec("set names utf8");
$sql = $pdo->prepare("SELECT * FROM " . $db_pref . "aktuell WHERE ID = 1");
$sql->execute();
$ergebnis = $sql->fetch();

?>
<script>

    var aktuelleposition = L.marker([<?php echo $ergebnis['lat'];?>, <?php echo $ergebnis['lng'];?>], {}).addTo(mymap);


</script>
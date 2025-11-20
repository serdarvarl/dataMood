<?php 

$bdd = new
PDO('mysql:host=localhost;dbname=datamoodbd;charset=utf8',
'root', 'root');
$rep = $bdd->query('select gender  from utilisateur');
while ($ligne = $rep ->fetch()) {
echo $ligne['gender']."<br />\n";
}
$rep ->closeCursor();
?>
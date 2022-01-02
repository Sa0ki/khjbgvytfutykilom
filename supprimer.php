<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_produit', 'root', '');
$stm = $base->prepare('delete from produit where id = :id');
$stm->execute([':id'=>$_GET['id']]);

echo '<center>Produit supprimé. <a href = afficheProduits.php>Retour</a></center>';
?>
<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_produit', 'root', '');
$stm = $base->prepare('update produit set reference = :ref, designation = :des,
                       quantite = :qte, prix_unitaire = :prix
                       where id = :id');
$stm->execute([':id'=>$_GET['id'], ':ref'=>$_POST['reference'],
               ':des'=>$_POST['designation'], ':qte'=>$_POST['quantite'],
               ':prix'=>$_POST['prix_unitaire']]);

echo '<center>Produit modifié. <a href = afficheProduits.php>Retour</a></center>';
?>
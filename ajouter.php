<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_produit', 'root', '');
$stm = $base->prepare('insert into produit (reference, designation, prix_unitaire, quantite)
values (:ref, :des, :prix, :qte)');
$stm->execute([':ref'=>$_POST['reference'], ':des'=>$_POST['designation'],
              ':prix'=>$_POST['prix_unitaire'], ':qte'=>$_POST['quantite']]);

echo '<center>Produit ajouté. <a href = afficheProduits.php>Retour</a></center>';
?>
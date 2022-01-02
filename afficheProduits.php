<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_produit', 'root', '');
$stm = $base->prepare('select * from produit');
$stm->execute();
$tab = $stm->fetchAll();

echo '<center><table border 1>';

echo '<tr>';
echo '<th>Id</th>';
echo '<th>Réference</th>';
echo '<th>Désignation</th>';
echo '<th>Prix Unitaire (DH)</th>';
echo '<th>Quantité</th>';
echo '<th>Modification</th>';
echo '<th>Suppression</th>';
echo '</tr>';

foreach($tab as $value)
{
    $i = $value["id"];
    echo '<tr><td>'.$value['id'].'</td>';
    echo '<td>'.$value['reference'].'</td>';
    echo '<td>'.$value['designation'].'</td>';
    echo '<td>'.$value['prix_unitaire'].'</td>';
    echo '<td>'.$value['quantite'].'</td>';
    echo "<td><a href = 'modifier.php?id=$i'>Editer</a></td>";
    echo "<td><a href = 'supprimer.php?id=$i'>Supprimer</a></td></tr>"; 
}
echo '</table></center>';

echo '<center><a href = "nouveauProd.html">Nouveau Produit</a></center>';

?>
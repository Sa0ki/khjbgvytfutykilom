<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>

</head>
<body>

    <?php
    
    $base = new PDO('mysql:host=localhost; dbname=gestion_produit', 'root', '');
    $stm = $base->prepare('select * from produit where id = :id');
    $stm->execute([':id'=>$_GET['id']]);
    $tab = $stm->fetch();
    ?>

    <form action = "editer.php?id=<?=$tab['id']?>" method = 'post'>
        <fieldset>
            <legend>Modifier le produit</legend>

            <table>
                <tr>
                    <td>Réference:</td>
                    <td><input type = 'text' name = 'reference' value = <?=$tab['reference']?>></td>
                </tr>
                <tr>
                    <td>Désignation:</td>
                    <td><input type = 'text' name = 'designation' value = <?=$tab['designation']?>></td>
                </tr>
                <tr>
                    <td>Prix Unitaire:</td>
                    <td><input type = 'number' name = 'prix_unitaire' value = <?=$tab['prix_unitaire']?>></td>
                </tr>
                <tr>
                    <td>Quantité:</td>
                    <td><input type = 'number' name = 'quantite' value = <?=$tab['quantite']?>></td>
                </tr>
                <tr>
                    <td><input type = 'submit' value = 'Enregistrer'></td>
                    <td><input type = 'reset' value = 'Annuler'></td>
                </tr>
            </table>
        </fieldset>
    </form>
    
</body>
</html>
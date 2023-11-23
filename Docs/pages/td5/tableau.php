<?php
    require_once 'fonction.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE GENERATOR</title>
</head>
<body>
    
    <?php
        $nbCol = post("colonnes");
        $nbLig = post("lignes");
    ?>

    <style>
        body{
            background-color: #353535;
            color: white;
        }
    </style>

    <?=titre("LE TABLEAU","SANS PUB !!!!!!")?>
    <form method='post'>
        <label for="ligne">Nombre de lignes :</label>
        <input type="number" name="lignes" id="ligne" value="<?=$nbLig?>">
        <br>
        <label for="colonne">Nombre de colonnes :</label>
        <input type="number" name="colonnes" id="colonne" value="<?=$nbCol?>">
        <br>
        <input type="submit"  value="Valider">
    </form>

<?=generateTable($nbLig, $nbCol,'o')?>

</body>
</html>
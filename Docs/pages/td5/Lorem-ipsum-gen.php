<?php
    $array??=[];
    $number??='15';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<style>
    body{
        background-color: #353535;
        color: white;
    }
</style>
<body>

    <div>
        <label for="number">Nombre de paragraphes :</label>
        <input type="number" id="number" name="number" value=<?=$number?>min="1" max="30">
    </div>

    <button type="submit">Valider</button>
    
</body>
</html>
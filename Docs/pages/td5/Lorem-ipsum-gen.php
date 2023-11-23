<?php
    require_once 'fonction.php';
    $count = post('count', 5);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum</title>
</head>
<style>
    body{
        background-color: #353535;
        color: white;
    }
</style>
<body>

    <div>
        <?=titre("Lorem ipsum generator","SANS PUB !!!!!!")?>
        <form method='post'>
            <label for="nb">Nombre de paragraphes :</label>
            <input type="number" name="count" id="nb" value="<?=$count?>">
        </form>
    </div>

    <?php
    $j = 0;
    $loremIpsumArraySize=count(LOREM_IPSUM_ARRAY);
        for($i=0; $i<$count; $i++){
            $j = rand(0,$loremIpsumArraySize-1);
            titre("Para $i",level:5);
            echo "<div>".shufflePara(LOREM_IPSUM_ARRAY[$j])."</div>";
        }
    ?>
    
</body>
</html>
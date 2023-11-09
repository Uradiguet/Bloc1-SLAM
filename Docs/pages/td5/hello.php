<?php
$content = "Buongiorno il mondo !!";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$content?>
    </title>
</head>
<body>
    <h1><?=$content?></h1>
       <p><?=" Hello world !!
         Bonjour le monde !!
         Buenos dias el mundo !!
         Bom día o mundo !! Guten Tag die Welt !! il y a aussi $content"?></p>
         <p><?=" Pour éviter la concaténation <b>".$content."</b> des chaînes"?></p>
</body>
</html>
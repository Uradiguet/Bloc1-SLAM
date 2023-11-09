<?php
    extract($_GET);
    $message ??='Hello World !';
    $color??='black';
    $size??='15';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    <p style="color:<?=$color ?>; font-size:<?= $size?>px">
        <?=$message?>
    </p>
    <h2> URL de test</h2>
    <ul>
        <li><a href="?message=TEXTE EN VERT DE TAILLE 30&size30&color=green">Vert</a></li>
        <li><a href="?message=TEXTE EN GRIS DE TAILLE 20&size20&color=grey">Gris</a></li>
        <li><a href="?message=TEXTE EN BLEU DE TAILLE 40&size40&color=blue">Bleu</a></li>
    </ul>
</body>
</html>
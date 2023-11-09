<?php
    extract($_POST);
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



    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Tapez votre message"><?=$message?>
            </textarea>
        </div>
        <div>
            <label for="color">Couleur :</label>
            <input type="color" id="color" name="color" value=<?=$color?>>
        </div>
        <div>
            <label for="size">taille :</label>
            <input type="number" id="size" name="size" value=<?=$size?>min="10" max="150">
        </div>
        <button type="submit">Valider</button>
    </form>




    <h2> URL de test</h2>

    <ul>
        <li><a href="?message=TEXTE EN VERT DE TAILLE 30&size=30&color=green">Vert</a></li>
        <li><a href="?message=TEXTE EN GRIS DE TAILLE 20&size=20&color=grey">Gris</a></li>
        <li><a href="?message=TEXTE EN BLEU DE TAILLE 40&size=40&color=blue">Bleu</a></li>
    </ul>

</body>
</html>
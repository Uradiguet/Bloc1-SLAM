<?php

    $fonts=['serif','sans-serif','cursive','monospace'];

    extract($_POST);
    $message ??='Hello World !';
    $color??='black';
    $size??='15';
    $italic=isset($ckIta)?";font-style: italic":"";
    $italicCk=$italic?"checked":"";
    $bold=isset($ckBold)?";font-weight: bold":"";
    $boldCk = $bold?"checked":"";
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

    <p style="color:<?=$color ?>; font-size:<?= $size?>px; <?=$italic?>; <?=$bold?>">
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

        <div>
            <input type="checkbox" id="ckBold" name="ckBold" value="bold" <?=$boldCk?>>
            <label for="ckBold">Gras</label>
            <input type="checkbox" id="ckIta" name="ckIta" value="italic" <?=$italicCk?>>
            <label for="ckIta">Italique</label>
        </div>

        <div>
            <label for='font'>Famille de police</label>
            <select name="font" id="font">
            <?php
                foreach($font as $font){
                    echo "<option value='$font'>$font</option>";
                }
                ?>
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
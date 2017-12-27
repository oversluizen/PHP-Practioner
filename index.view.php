<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php foreach ($person as $feature => $val) : ?>
               <li><strong><?= $feature;?></strong> <?= $val; ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>

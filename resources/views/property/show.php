<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Single</title>
</head>
<body>
<?php
    if(!empty($property)){
        foreach ($property as $p){
            ?>
                <h1><?= $p->title ?></h1>
                <p><?=$p->description?></p>
                <p>R$ <?= number_format($p->rental_price,2,',','.') ?></p>
                <p>R$ <?= number_format($p->sale_price,2,',','.') ?></p>
                <?php

        }
    }
    ?>

</body>
</html>



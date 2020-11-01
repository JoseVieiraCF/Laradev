
<!doctype html>
<html lang="pt-br">
<?php
$property = $property[0];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar imóvel</title>
</head>
<body>
<form action="<?= url('/imoveis/update',['id' => $property->id]) ?>" method="post">
    <?= csrf_field();?>
    <?= method_field('PUT');?>
    <input type="text"  name="title" id="title"  value="<?php echo $property->title ?>" placeholder="Title"><br>
    <textarea cols="30" rows="10" "name="description" id="description" placeholder="Description"><?php echo $property->description ?></textarea><br>
    <input type="number" value="<?php echo $property->rental_price ?>"name="rental_price" id="rental_price" placeholder="Rental price"><br>
    <input type="text" value="<?php echo $property->sale_price ?>" name="sale_price" id="sale   _price" placeholder="Sale price"><br>
    <input type="submit" value="Atualizar">
</form>

</body>
</html>


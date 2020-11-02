@extends('property.master')
@section('content')
<?php
$property = $property[0];
?>

<form action="<?= url('/imoveis/update',['id' => $property->id]) ?>" method="post">
    <?= csrf_field();?>
    <?= method_field('PUT');?>
    <input type="text"  name="title" id="title"  value="<?php echo $property->title ?>" placeholder="Title"><br>
    <textarea cols="30" rows="10" "name="description" id="description" placeholder="Description"><?php echo $property->description ?></textarea><br>
    <input type="number" value="<?php echo $property->rental_price ?>"name="rental_price" id="rental_price" placeholder="Rental price"><br>
    <input type="text" value="<?php echo $property->sale_price ?>" name="sale_price" id="sale   _price" placeholder="Sale price"><br>
    <input type="submit" value="Atualizar">
</form>
@endsection



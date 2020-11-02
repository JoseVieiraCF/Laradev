@extends('property.master')
@section('content')
<form action="<?= url('/imoveis/store') ?>" method="post">
    <?= csrf_field();  ?>
    <input type="text"  name="title" id="title" placeholder="Title"><br>
    <textarea cols="30" rows="10"  name="description" id="description" placeholder="Description"></textarea><br>
    <input type="number" name="rental_price" id="rental_price" placeholder="Rental price"><br>
    <input type="text" name="sale_price" id="sale   _price" placeholder="Sale price"><br>
    <input type="submit" value="Salvar">
</form>
@endsection

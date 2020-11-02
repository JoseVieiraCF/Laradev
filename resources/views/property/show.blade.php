@extends('property.master')
@section('content')
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
@endsection



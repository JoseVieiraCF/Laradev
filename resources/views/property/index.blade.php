@extends('property.master')
@section('content')
<h1>Listagem de imóveis</h1>

<?php
    if (!empty($properties)){
        echo '<table>';
        echo '<tr><td>Title</td>';
        echo '<td>Valor de locação</td>';
        echo '<td>Valor de compra</td></tr>';
        echo '<td>Ações</td></tr>';
        foreach ($properties as $property){
            $linkRedMore = url('/imoveis/'.$property->url);
            $linkEdit = url('/imoveis/edit/'.$property->url);
            $linkDelete = url('/imoveis/delete/'.$property->url);
            echo '<tr>';
            echo '<td>R$ '.$property->title.'</td>';
            echo '<td>'.number_format($property->rental_price,2,',','.').'</td>';
            echo '<td>'.number_format($property->sale_price,2,',','.').'</td>';
            echo "<td><a href='{$linkRedMore}'>Ler mais</a> | <a href='{$linkEdit}'>Editar</a> | <a href='{$linkDelete}'>Deletar</a></td>";
            echo '</tr>';
        }
        echo '<table>';
    }
?>
@endsection

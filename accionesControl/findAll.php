<?php
require "vendor/autoload.php";

function findAllprod()
{
    $client = new MongoDB\Client("mongodb://localhost");
    $db = $client->rosse;
    $productosDB = $db->productos;
    $productos = $productosDB;

    $result = $productos->find();
    return $result;
}

function findAllCat(){
    $client = new MongoDB\Client(
        "mongodb://localhost"
    );
    
    $db = $client->rosse;
    $categioriasDB = $db->categorias;
    $categorias = $categioriasDB;

    $result = $categorias->find();
    return $result;
}

?>
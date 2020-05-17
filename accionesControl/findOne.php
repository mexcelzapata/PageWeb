<?php
require "vendor/autoload.php";

function findOneProd($key)
{
    $client = new MongoDB\Client("mongodb://localhost");
    // $client = new MongoClient();
    $db = $client->rosse;
    $productsDB = $db->productos;
    $products = $productsDB;

    $result = $products->findOne(['_id' => $key]);
    return $result;
}

function findOneCat($key) //productos de la
{
    $client = new MongoDB\Client("mongodb://localhost");
    // $client = new MongoClient();
    $db = $client->rosse;
    $categioriasDB = $db->categorias;
    $categorias = $categioriasDB;

    $result = $categorias->findOne(['categoria' => $key]);
    return $result;
}


?>
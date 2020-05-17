<?php
require "vendor/autoload.php";

function findOneinCat ($key)
{
    $client = new MongoDB\Client("mongodb://localhost");
    // $client = new MongoClient();
    $db = $client->rosse;
    $ProdinCatDB = $db->productos;
    $prod = $ProdinCatDB;
    $result = $prod->find(['categoria' => $key]);
    return $result;
}

?>
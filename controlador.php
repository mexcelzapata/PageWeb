<?php
require "vendor/autoload.php";
//require "accionesControl/create.php";
require "accionesControl/findAll.php";
require "accionesControl/findOne.php";
require "accionesControl/findAllPc.php";


    class ProductsController
    {
        public function _construct()
        {
            $client = new MongoDB\Client("mongodb://localhost");
            $db = $client->rosse;
            $productsDB = $db->productos;
            $this->productos = $productsDB;
        }

        public function findAllprod()
        {
            return findAllprod();
        }

        public function findOneProd($key)
        {
            $key = new MongoDB\BSON\ObjectId($key);
            return findOneProd($key);
        }

        public function create()
        {
            return create();
        }

        public function findOneinCat($key)
        {
            $key = new MongoDB\BSON\ObjectId($key);
            return findOneinCat($key);
        }
    }
    
    class CategoriasController{

        public function _construct(){
            $client = new MongoDB\Client("mongodb://localhost");
            $db = $client->rosse;
            $categioriasDB = $db->categorias;
            $this->categorias = $categioriasDB;
        }
        
        public function findAllCat(){
            return findAllCat();
        }
        public function findOneCat(){
            $_id = new MongoDB\BSON\ObjectId($_id);
            return findOneCat($_id);
        }
    } 
?>
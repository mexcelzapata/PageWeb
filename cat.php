<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$cat = $_GET['key'];
$collection = $client->rosse->productos->find(['categoria'=>$cat]);

?>

<div class="container my-5">
    <h1>Productos</h1>
        <div class="row justify-content-center mt-5 d-flex">
            <div class="card-columns">
                <?php
                foreach ($collection as $entry) {
                    $nombre = $entry['name'];
                    $desc = $entry['desc'];
                    $precio = $entry['precio'];
                    $imagen = $entry['image'];
                    ?>
                    <div class="card">
                            <img class="card-img-top image" src="<?php echo $imagen?>" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $nombre ?></h5>
                            <p class="card-text"><?php echo $desc?></p>
                            <p class="card-text"><?php echo $precio?></p>
                            <div class="d-flex justify-content-between">
                                <a href="prod.php?key=<?php echo $entry["_id"]?>" class="card-link text-center" >Ver producto</a>
                                <a href="#" class="card-link text-center">
                                    <span style="font-size: 16px;">
                                        <i class="fas fa-cart-plus"></i>
                                    </span> Añadir</a>
                                </a></div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
</div>

<?php include_once("footer.php"); ?>
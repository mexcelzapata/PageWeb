<?php include_once("header.php");?>
<?php include_once("controlador.php");?>

<?php
$controller = new ProductsController;
$key = $_GET['key'];
$product= $controller->findOneinCat($key);
?>
<div class="container my-5">
        <div class="row justify-content-center mt-5 d-flex">
            <div class="card-columns">
                <?php
                foreach ($product as $entry) {
                    ?>
                    <div class="card">
                            <img class="card-img-top" src="<?php echo $entry['image']?>" alt="">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $entry["name"]?></h5>
                            <p class="card-text"><?php echo $entry["desc"]?></p>
                            <p class="card-text"><?php echo $entry["precio"]?></p>
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

<?php include_once('footer.php');?>
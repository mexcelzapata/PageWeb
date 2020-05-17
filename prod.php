
<?php include_once("header.php");?>
<?php include_once("controlador.php");?>


<?php
$controller = new ProductsController;
$key = $_GET['key'];
$product= $controller->findOneProd($key);
?>

<div class="container my-5">
        <div class="row">
            <div class="col-xs-12 col-md">
                <figure class="figure">
                    <img class ="card-img-top image"src="<?php echo $product['image']?> " class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            <div class="col-xs-12 col-md">
                <div class="row">
                    <h3> <?php echo $product["name"] ?></h3>
                </div>
                <div class="row">
                    <p> <?php echo $product["desc"] ?></p>
                </div>
                <div class="row">
                    <p> <?php echo $product["precio"] ?></p>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="card-link text-center">
                            <span style="font-size: 16px;">
                                <i class="fas fa-cart-plus"></i>
                            </span> Añadir al carrito</a>
                        </a></div>
                </div>
            </div>
        </div>
</div>




<?php include_once("footer.php");?>

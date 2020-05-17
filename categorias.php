<?php include_once("controlador.php");?>

<?php
$controller = new CategoriasController;
$categorias = $controller->findAllCat();
?>

<div class="container my-5">
    <div class = "row">
        <div class = "col-12 row justify-content-between align-items-center">
            <div>
                <h3>Categorias</h3>
            </div>
            <div>
            <small><a href="product.php" class="text-decoration-none">Ver todos</a></small>
            </div>
                <div class="row justify-content-center mt-5 d-flex">
                    <div class="card-columns">
                        <?php
                        foreach ($categorias as $entry) {
                            ?>

                            <div class="card">
                                    <img class="card-img-top " src="<?php echo $entry['image']?>" alt="">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $entry["name"]?></h5>
                                    <p class="card-text"><?php echo $entry["desc"]?></p>
                                    <div class="d-flex justify-content-between">
                                        <a href="cat.php?key=<?php echo $entry["_id"]?>" class="card-link text-center" >Ver productos</a>
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
    </div>            
</div>

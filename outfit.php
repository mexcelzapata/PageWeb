<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$collection = $client->rosse->outfit->find();

?>
<div class="row justify-content-center mt-5 d-flex">
                    <div class="card-columns">
                        <?php
                        foreach ($collection as $entry) {
                            ?>

                            <div class="card">
                                    <img class="card-img-top " src="<?php echo $entry['image']?>" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between"></div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
</div>

<?php include_once('footer.php');?>
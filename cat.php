<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$cat = $_GET['key'];
$collection = $client->rosse->productos->find(['categoria'=>$cat]);
$prods = Array();

foreach ($collection as $entry) {
        $prods[ $entry['_id']->__toString()] = $entry['name'];
}

?>

<h1>Productos </h1>
<ul>


<?php
foreach($prods as $key => $value){
    echo "<li><a href =prod.php?key=$key>$value</a></li>";
}
?>
</ul>
<?php
include_once("footer.php");
?>
<?php
require 'Catalog.php';

#Creates a new instance of the class/invokes the class
$catalog = new Catalog('products.json');

// $catalogCambridge = new Catalog('cambridge-products.json');
// $catalogSomerville = new Catalog('somerville-products.json');

#this is an object from the instance above and from these objects we can start to access the methods and the properties within the object or class as long as the visiblity modifier is public
$product = $catalog->getById(9);
// eventually we will use this for multiple IDs $product = $catalog->getById($_GET['productId']);


var_dump($catalog->searchByName('Cheerios'));
var_dump($catalog->searchByName('ee'));


//$catalog->getById(9);
//var_dump($catalog->products);
//var_dump($catalog->getAll());


?>
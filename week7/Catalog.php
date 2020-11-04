<?php

class Catalog
{
    # Property
    # Public is a visibility keyword we need before the function (private or protected options also exist)
    public $products = [];

    # Special method that is the start up method that will be used when we use the class which makes it perfect to load our json file & relates to the index-controller.php line: $catalog = new Catalog; which invokes the code below
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        // only gets info from file called produtcs      $json = file_get_contents('products.json');
        $this->products = json_decode($json, true);
        //gets all products    $products = json_decode($json, true);
        //dumls all products   var_dump($products);
    }

    # Method 1
    # Gets all of the products
    public function getAll()
    {
        return $this->products;
    }

    # Method 2
    # Gets a specific product based on ID given
    public function getById(int $id)
    {
        return $this->products[$id];
    }

    # Method 3
    # Gets product by name
    public function searchByName(string $term)
    {
        $results = [];
        
        foreach($this->products as $product) {
            if (strstr($product['name'], $term)) {
                $results[] = $product;
            }
        }
        return $results;
    }
}
# Variables=properties and methods=functions in the context of classes.
?>
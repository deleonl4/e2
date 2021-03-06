<?php
namespace App\Controllers;

class ProductController extends Controller
{

//private $products;   

public function __construct($app)
{
    parent::__construct($app);
    //$this->products = new Products($this->app->path('database/products.json'));
}

 /**
     * GET "/products"
     * Show all products
     */
public function index()
    {        
        //return 'Show all the products here...';
        return $this->app->view('products.index', [
            //'products' => $this->products->getAll()
            'products' => $this->app->db()->all('products')
            ]);
    }

    public function show() 
    {
        $id = $this->app->param('id');

        #if no id is present, send the user to the products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        //$product = $this->products->getById($id); - Load the product details
        $product = $this->app->db()->findById('products', $id);

        # If we couldn't find the product, return the "product missing" view
        if (is_null($product)) {
            //return $this->app->view('errors.404');
            return $this->app->view('products.missing', ['id' => $id]);
        }

        #Load the review details
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

       // dump ($reviews);
        # If the user submitted the review form, we'll have a confirmation name
        # that we'll pass to the view to show them a confirmation message
        $confirmationName = $this->app->old('confirmationName');


        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName,
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:200', # Note how multiple validation rules are separated by a |
        ]);

        //dump($_POST);

        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');

       #Persist the review to the database
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];

       $this->app->db()->insert('reviews', $data);
    
       $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);

       #Send them back to the product page + confirmation message that review was posted
    }

}
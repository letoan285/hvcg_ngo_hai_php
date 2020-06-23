<?php 
require_once "app/models/Product.php";
require_once "app/models/Category.php";
class ProductController {
    public function __construct(){
        $this->path = 'http://localhost/hvcg/2020/ngo_hai/mvc_oop';
    }
    public function index(){
        $rootPath = '';
        $products = Product::all();
        $categories = Category::all();
        // $view = "hhihihgioaehg"
        $view = "app/views/products/index.php";
        include_once "app/views/layouts/admin.php";
    }

    public function create()
    {
        $rootPath = '../';
        $categories = Category::all();
        // $view 
        $view = "app/views/products/create.php";
        include_once "app/views/layouts/admin.php";
    }

    public function store()
    {

        $product = new Product();

        $product->name = $_POST['name'];
        $product->slug = $_POST['slug'];
        $product->image = $_POST['image'];
        $product->list_price =  $_POST['list_price'];
        $product->sell_price = $product->list_price*0.8;
        $product->description = $_POST['description'];
        $product->category_id = $_POST['category_id'];
        $product->supplier_id = $_POST['supplier_id'];
        
        $product->insert();
        header("location: $this->path"."/products");
    }
}
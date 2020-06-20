<?php 
require_once "Product.php";
$id = $_POST['id'];

$product = Product::find($id);

$product->name = $_POST['name'];
$product->slug = $_POST['slug'];
$product->image = $_POST['image'];
$product->list_price =  $_POST['list_price'];
$product->sell_price = $product->list_price*0.8;
$product->description = $_POST['description'];
$product->category_id = $_POST['category_id'];
$product->supplier_id = $_POST['supplier_id'];

// var_dump($product);die;
$product->update();
header("location: index.php");
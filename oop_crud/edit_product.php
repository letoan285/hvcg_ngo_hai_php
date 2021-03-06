<?php 

require_once "Product.php";
require_once "Category.php";
$id = $_GET['id'];


$product = Product::find($id);
$categories = Category::all();
// var_dump($product);die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="text-center mt-3">Product List</h3>
               <form action="update_product.php" method="POST">
                    <input type="hidden" name="id" value="<?=$product->id?>" class="form-control">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?=$product->name?>" placeholder="Product Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="<?=$product->slug?>" placeholder="Slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="text" name="image" value="<?=$product->image?>" placeholder="Product Price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="list_price" value="<?=$product->list_price?>" placeholder="Product Price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="5">
                        <?=$product->description?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Category ID</label>
                        <select name="category_id" class="form-control">
                            <?php foreach($categories as $key=>$cate): ?>
                            
                                <option 
                                
                                        <?php if($product->category_id == $cate->id){
                                            echo 'selected';
                                        } ?> 
                                    
                                    value="<?=$cate->id?>">
                                        
                                        
                                <?=$cate->name?>
                                
                                </option>
                        
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Supplier ID</label>
                        <select name="supplier_id" class="form-control">
                                <option value="1">Apple</option>
                                <option value="2">Samsung</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="./index.php" class="btn btn-warning">Cancel</a>
                    </div>
               </form>
            </div>
        </div>
    </div>
</body>
</html>
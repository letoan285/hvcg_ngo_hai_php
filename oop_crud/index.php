<?php 
require_once "Product.php";
require_once "User.php";
require_once "Category.php";

// $model = Product::find(2);
$model = new Product();
$products = $model->all();
// var_dump($product);die;

// var_dump($model->where(['name', 'like', '%iphone%']));die;
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
            <div class="col-12">
            <h3 class="text-center mt-3">Product List</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th><a class="btn btn-sm btn-success" href="add_product.php">Add</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $key=>$product): ?>
                    
                        <tr>
                            <td><?= $key+1?></td>
                            <td><img width="60" src="<?= $product->image?>" alt=""></td>
                            <td><?= $product->name ?></td>
                            <td><?= $product->sell_price ?></td>
                            <td><?= $product->getCategoryName($product->category_id) ?></td>
                            <td>
                                        <a class="btn btn-sm btn-info" href="edit_product.php?id=<?= $product->id ?>">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="delete_product.php?id=<?= $product->id ?>">Delete</a>
                                </td>
                        </tr>
                    
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
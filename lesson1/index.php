<?php 

$img = 'https://product.hstatic.net/1000405999/product/s.o_7_orange_back_0892f68fe3f94398a67aa6b8cdf9f859_grande.jpg';
$products = [
    ['id' => 1, 'name' => 'product 1', 'price' => 1200, 'image' => $img],
    ['id' => 2, 'name' => 'product 2', 'price' => 1200, 'image' => $img],
    ['id' => 3, 'name' => 'product 3', 'price' => 1200, 'image' => $img],
    ['id' => 4, 'name' => 'product 4', 'price' => 1200, 'image' => $img],
    ['id' => 5, 'name' => 'product 5', 'price' => 1200, 'image' => $img]
];
// session_start();
// session_destroy();
// echo $name = $_SESSION['my_name'];

// setcookie('name', 'value', time()+60*30*24);
// echo $_COOKIE['name'];


// $arr = [2,3,'hai', 'man', 'score'=> 4, 9, 'address' => 'HCM'];

// // print_r($arr);
// echo $arr[];

// $arr[] = 'gaeae';
// $arr = [3,7,8,32,56];
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
                <table class="table table-bordered">
                    <h3 class="text-center mt-4">Product List</h3>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th><a href="" class="btn btn-sm btn-success">Add</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php foreach($products as $key=>$product): ?>
                    
                        <tr>
                            <td><?= $key+1?></td>
                            <td><img width="60" src="<?= $product['image']?>" alt=""></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td>
                                        <a class="btn btn-sm btn-info" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">Delete</a>
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
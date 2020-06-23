<?php 

require_once "app/controllers/ProductController.php";
require_once "app/controllers/HomeController.php";

$url = $_GET['url'] ?? '/';

switch($url){
    case '/': 
        $ctl = new HomeController();
        $ctl->index();
        break;
    case 'products': 
            $ctl = new ProductController();
            $ctl->index();
            break;
    case 'products/add':
            $method = $_SERVER['REQUEST_METHOD'];
            if($method =='GET'){
                $ctl = new ProductController();
                $ctl->create();
                break;
            } else if($method =='POST') {
    
                $ctl = new ProductController();
                $ctl->store();
                break;
            }
           
    default: 
        var_dump('404 not found');die;
        break;
}

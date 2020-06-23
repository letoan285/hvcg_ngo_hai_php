<?php 
require_once "app/models/Product.php";
require_once "app/models/Category.php";
class HomeController {
    public function __construct(){
        $this->path = 'http://localhost/hvcg/2020/ngo_hai/mvc_oop';
    }
    public function index(){
        $rootPath ='';
 
        // $view = "hhihihgioaehg"
        $view = "app/views/index.php";
        include_once "app/views/layouts/admin.php";
    }

}
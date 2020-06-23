<?php 
require_once "app/models/BaseModel.php";
class Product extends BaseModel {
    protected $table = 'products';

    protected $columns = ['name', 'slug', 'description', 'image', 'sell_price', 'list_price', 'category_id', 'supplier_id'];
 
    public function getCategoryName($category_id)
    {
         
         $cate = Category::find($category_id);
         if($cate){
             return $cate->name;
         }
         return 'Ko co Danh Muc';
         // return 'chua biet category';
    }
}
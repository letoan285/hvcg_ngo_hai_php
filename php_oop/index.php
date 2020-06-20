<?php 
// interface
// interface ProductInterface {
//     function getName($name, $age);
//     const NAME = '';
// }

// interface ProductInterface2 extends ProductInterface {

// }

// class Product implements ProductInterface, ProductInterface2 {
//     function getName($name, $age){}
// }

// $product = new Product();

// Trait

// abstract class Mango {
//     public $name = 'My Mango';
//     public function getName(){
//         return 'Mango';
//     }
//    abstract function getAll();
// }

// final class Mango {
//     public $name = 'My Mango';
//     public final function getName(){
//         return 'Mango';
//     }
//    public function getAll(){}
// }

// class Mango1 extends Mango {
//     public function getAll(){}
//     public function getName(){}
// }

// $mango = new Mango1();
// echo $mango->name;
// chaining method 
// getName()->getPrice()->getAge();
// trait TBill {
//     public $name1 = 'TBil';
// }

// class Person {
//     public $age = 90;
// }
// class Bill {
//     // use TBill;
//     protected $mango_price = 20000;
//     protected $banana_price = 16000;
//     protected $jack_price = 25000;
//     public $bill = 0;
//     public $name = 'My Bill';
//     public function __construct(){
//         $this->name = $this;
//     }


//     public function getMangoPrice($w){
//         $this->bill += $w*$this->mango_price;
//         return $this;
//     }
//     public function getBananaPrice($w){
//         $this->bill += $w*$this->banana_price;
//         return $this;
//     }
//     public function getJackPrice($w){
//         $this->bill += $w*$this->jack_price;
//         return $this;
//     }

//     public function getBill(Person $price){
//         $price->age;
//         return $price * 5;
//     }
    
// }

// type hinting
// 5kg mango
// 8kg banana
// 12kg jack

// $bill = new Bill();
// echo $bill->getBill();
// $mybill = $bill->getMangoPrice(5)->getBananaPrice(8)->getJackPrice(12)->bill;

// echo $mybill;
// echo $bill->name->getMangoPrice(9)->bill;

// required
// include;


// include_once "./headers.php";
//     echo "<h1>Hello Body</h1>";
// include "./footer.php";

namespace first;
include "./Person.php";
// $n = new Date();
$me = new Person;

$me->getName();


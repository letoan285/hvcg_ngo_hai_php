<!-- instance  -->

<?php 

// $name = 'gwaeg';
class Animal {
    // public function Animal(){}
    public static $location = 'Vietnam';
    // public const NAME = 'MY NAME';
    public $weight = 50;
    //    public $name = 'milu';
    //    protected $color = 'Yellow';
    //    private $address = 'Hanoi, Vietnam';
    //     public function getAge(){
    //         $name = 'inside name';
    //         $age = 40;
    //         return $age;
    //     }

    //     public function getThen(){
    //         echo $this->getAge();
    //     }
    //     public function getDogAddress(){
    //         return $this->address;
    //     }

    public function getWeight($food){
        $this->weight = $food *2;
    }
    public function getLocation(){
        return self::$location;
    }

    public static function getMyWeight(){
        $w = new static();
        return $w->weight;
    }



}


class Dog extends Animal {
    // public function getColor(){
    //     return $this->color;
    // }
    // public function getAddress(){
    //     return $this->getDogAddress();
    // }
    public function getWeight($food){
        $this->weight = $food*5;
    }
}
class Cat extends Animal {
    public function getWeight($food){
        $this->weight = $food *2;
    }

}

// $vang = new Animal();
// echo $vang->getMyWeight();
// var_dump($vang);
// 1. inherinace
// 2. encapsulation
// 3. abstraction
// 4. polimophism


// echo Animal::getMyWeight();
// $milu = new Animal();
// echo $milu->getMyWeight();

// $meo = new Cat();
// $meo->getWeight(5);

// echo $meo::NAME;

// echo $meo::$location;

// echo "Khoi luong cho sau khi an 5kg $milu->weight";
// echo "khoi luong meo sau khi an 5kg $meo->weight";

// echo $hello ?? 'Goodbye'; // coelesion
// null, '', 0,

// $x = 0;
// if($x){
//     // do sometih
// } else {
//     /// do something else 
// }

// echo $milu->getAddress();
// if(isset($aegaheogihaeg));

// $dog = new Animal();
// $milu = $dog;



// $x = 4;
// $y = $x;
// $y = 90;


// echo $x;

/// pointer
/// reference
/// primitive

/// stack, heap.
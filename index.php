<?php
    // class Car{
    //     public $speed = 180;

    //     public function met(){
    //         echo 1;
    //     }

    //     function __construct($a){
    //         echo $a;
    //     }
    // }

    // $car1 = new Car(10);
    // $car1 = new Car(20);
    // $car1->met();
    // echo $car1->speed;

    // class Car{
    //     public $mark;
    //     public $model;
    //     public $maxSpeed;

    //     function __construct($details){
    //         echo "я конструктор";

    //         // echo $this->mark = $details['mark']; 
    //         // echo $this->model = $details['model'];
    //         // echo $this->maxSpeed = $details['maxSpeed'];
    //     }

    //     function __destruct(){
    //         // echo "<br>я деструктор";
    //     }
    // }

    // $details = ['maxSpeed' => 180, 'mark' => "2107", 'model' => "VAZ"];

    // $lada = new Car($details);
    // // $GAZ = new Car("GAZ ", "Next " , 80);

    // unset($car);

    // echo "<br>123";

    class Car{
        public $mark;
        public $model;
        public $maxSpeed;
        private $flag;

        private function met(){
            echo "run";
        }
    }

    $car1 = new Car();
    // $car1->met();
?>
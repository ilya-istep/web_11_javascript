<?php
    class Meh{
        private  $type = "дрыгатель";
        protected $wheel = "Турция<br>";
    }

    class machine extends Meh{
        function met(){
            echo $this->wheel;
        }
    }

    $machine1 = new machine();
    // echo $machine1->type; не сработает, для модификатора доступа private наследование не сработает
    echo $machine1->met(); // protected работает в классе, где объявлен, и в классе, который его наследует

    class Car{
        private $v;
        private $o;

        // function setO($o){
        //     if(filter_var($o, FILTER_VALIDATE_INT)){
        //         $this->o = $o;
        //     }
        // }

        // function getO($o){
        //    return $this->o;
        // }

        function __get($field){
            switch ($field){
                case 'o': return $this->o; break;
                // case 'v': return $this->v; break;
            }
        }

        function __set($field, $value){
            switch ($field){
                case 'o': return $this->o = $value; break;
                // case 'v': return $this->v = $value; break;
            }
        }

        function __construct($v){

            if(filter_var($v, FILTER_VALIDATE_FLOAT)){
                $this->v = $v;
            }
            else{
                echo "хрень ваши данные";
            }
            echo $this->v;
        }
    }

    $car1 = new Car("1.0");
    $car1->o = 2;
    echo $car1->o;

    // $car1->setO(10);

    // создать форму регистрации с обработчиком в виде класса

    // поля регистрации:
    // имя
    // e-mail
    // пароль
    // подтверждение пароля
    // аватар с типом jpg или png
?>
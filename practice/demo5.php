<?php
    include "Dog_class.php";
    include "Bird_class.php";

    class Action{
        public function actionMove(Animal $obj){
            $obj->move();
        }
    }

    $dog = new Dog();
    $bird = new Bird();
    $action->actionMove($dog);
    $action->actionMove($bird);
?>
<?php
    include "Dog_class.php";
    #include "Bird_class.php";
    #include "Animal_abst.php";
    $dog = new Dog();
    class Action{
        public function actionMove($odj){
            echo $odj->move();
        }
    }
    $action = new Action();
    $action->actionMove($dog)
?>
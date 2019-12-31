<?php
    include "Dog_class.php";
    include "Bird_class.php";
    $dog = new Dog();
    #$bird = new Bird();
    class Action{
        public function actionMove(Animal $odj){
            echo $odj->move();
        }
    }
    $action = new Action();
    $action->actionMove($dog);
    #$action->actionMove($bird);
?>
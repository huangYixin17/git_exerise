<?php
    include "Dog_class.php";
    include "Bird_class.php";
    include "Animal_abst.php";
    class Action{
        public function actionMove(Animal $dog){
            $dog->move();
        }
    }
?>
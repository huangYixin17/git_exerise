<?php
    include "dog_class.php";
    include "Bird_class.php";
    include "Animal_abst.php";
    class Action extends Animal{
        public function actionMove(Animal $obj){
            $obj->move();
        }
    }
?>
<?php
    include "Animal_abst.php";
    class Action{
        public function actionMove(Animal $obj){
            $obj->move();
        }
    }
?>
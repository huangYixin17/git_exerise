<?php
    include "Animal.abst.php";
    class Bird extends Animal{
        public function move(){
            echo "fly...";
        }
    }
?>
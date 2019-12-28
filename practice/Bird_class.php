<?php
    include "Animal_abst.php";
    class Bird extends Animal{
        public function move(){
            echo "fly...";
        }
    }
?>
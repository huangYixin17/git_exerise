<?php
    include "Bark.php";
    include "Swim.php";
    //implements是實現的意思,跟介面搭配用
    class Human implements Bark,Swim{
        public function bark(){
            echo "人類叫..很吵<br/>";
        }
        public function Swim(){
            echo "人游泳...溺死<br/>";
        }
        
    }
?>
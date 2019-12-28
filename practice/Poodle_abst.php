<?php
    include "dog_Abstract.php";

    class Poodle_abst extends dog{
        protected $size;

        public function __construct($name,$color,$style)
        {
            parent::__construct($name,$color,$style);
            $this->size = $size;
        }
        public function Bark(){
            echo "狗叫...但小聲..";
        }
    }
?>
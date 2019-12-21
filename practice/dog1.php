<?php
    class dog{
        public $name;
        public $color;
        public $style;

        public  function __construct($name,$color,$style)
        {
            $this->name = $name;
            $this->color = $color;
            $this->style = $style;   
        }
        public function dogRun(){
            echo "run...";
        }
        public function dogBark(){
            echo "Bark...";
        }
        public function __destruct()
        {
            echo "dog coming home...";
        }
    }

?>
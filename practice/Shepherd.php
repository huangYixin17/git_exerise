<?php
    include "dog1.php";

    class Shepherd extends dog{
        protected $age;

        public function __construct($name,$color,$style,$age)
        {
            parent::__construct($name,$color,$style);
            $this->age = $age;
        }

        public function dowork(){
            echo "趕羊...<br/>";
        }
        public function __destruct()
        {
            echo "趕羊到家了...";
        }
    }
?>
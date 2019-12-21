<?php
    include "dog1.php";

    class Poodle extends dog{
        protected $size;

        public function __construct($name,$color,$style,$size)
        {
            parent::__construct($name,$color,$style);
            $this->size = $size;
        }
        public function dogBark(){
            //可以複寫父類別的方法
            echo "狗叫..但小聲..";
            //也可以再次呼叫父類別原先的方法
            parent::dogBark();
        }

    }
?>
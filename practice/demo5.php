<?php
    include "Dog_class.php";
    include "Bird_class.php";
    include "Action_class.php";

    
    $bird = new Bird();
    $dog = new Dog();
    $action = new action();
    $action->actionMove($dog);
    $action->actionMove($bird);
?>
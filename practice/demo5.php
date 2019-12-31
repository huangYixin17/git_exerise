<?php
    include "Action_class.php";
    include "Dog_class.php";
    include "Bird_class.php";
    $dog = new Dog();
    $bird = new Bird();
    $action = new Action();
    echo $action::actionMove($dog);
    echo $action::actionMove($bird);
?>
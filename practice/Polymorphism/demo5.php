<?php
    include "Dog_class.php";
    include "Bird_class.php";
    include "Action_class.php";

    $dog = new Dog();
    $bird = new Bird();
    $action = new action();
    $action->actionMove($dog);
    $action->actionMove($bird);
?>
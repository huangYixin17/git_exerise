<?php
    include "Action_class.php";
    include "dog_class.php";
    include "Bird_class.php";
    $dog = new Dog();
    $bird = new Bird();
    $action = new Action();
    $action->actionMove($Dog);
    $action->actionMove($bird);
?>
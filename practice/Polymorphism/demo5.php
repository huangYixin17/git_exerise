<?php
    /*引入類別,如果Dog_class.php已經引入Animal_abst.php的話
    那Bird_class.php就不行再引入,否則程式會錯誤
    一支程式只能引入一個類別,像Action_class
    就不用再引入Dog_class.php或是Bird_class.php,因為
    主程式demo5.php會引入,我們只要套用Action_class.php就好
    */
    include "Dog_class.php";
    include "Bird_class.php";
    include "Action_class.php";

    $dog = new Dog();
    $bird = new Bird();
    $action = new action();
    $action->actionMove($dog);
    $action->actionMove($bird);
?>
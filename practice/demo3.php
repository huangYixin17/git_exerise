<?php
    include "Shepherd.php";

    $mydog = new Shepherd("peter","brown","牧羊犬","10");
    echo $mydog->name."<br/>";
    echo $mydog->color."<br/>";
    echo $mydog->style."<br/>";
    echo $mydog->dowork()."<br/>";
    echo $mydog->dogRun()."<br/>"
?>
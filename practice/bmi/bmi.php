<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>bmi(php)輸出畫面</title>
    </head>
    <body><div>
        體重:<?php echo $POST['height'];?><br>
        身高:<?php echo $POST['weight'];?><br>
        <?php
            $h = $POST['height'];
            $w = $POST['height'];
            $bmi = $w/($h**2);?>
        <?php echo "BMI: $bmi"?><br>

</html>
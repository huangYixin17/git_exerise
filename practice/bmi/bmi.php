<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>bmi(php)輸出畫面</title>
    </head>
    <body><div>
        姓名:<?php echo $_POST['id'];?><br>
        體重:<?php echo $_POST['height'];?><br>
        身高:<?php echo $_POST['weight'];?><br>
        <?php
            $h = $_POST['height'];
            $w = $_POST['weight'];
            $bmi = $w/($h**2);?>
        <?php echo "BMI: $bmi"?><br>
        </div>
    </body>

</html>
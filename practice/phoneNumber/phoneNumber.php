<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>班級通訊錄(輸出畫面)</title>
    </head>
    <body><div>
        姓名:<?php echo $_POST['id'];?><br>
        出生年月日:<?php echo $_POST['data'];?><br>
        地址:<?php echo $_POST['addr'];?><br>
        電話:<?php echo $_POST['phone'];?><br>
        電子郵件1:<?php echo $_POST['mail1'];?><br>
        電子郵件2:<?php echo $_POST['mail2'];?><br>
        </div>
    </body>

</html>
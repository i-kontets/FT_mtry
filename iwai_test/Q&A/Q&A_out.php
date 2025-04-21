<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $to = "2410028@gmail.com"; //宛先
        $subject = "TEST";  //件名
        $message =nl2br($_REQUEST['Q&A_out']);; //メッセージ
        $headers = "From: 2410008+pluswear.info@i-seifu.jp"; //ヘッダ
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        mb_send_mail($to, $subject, $message, $headers);












    ?>
    
</body>
</html>
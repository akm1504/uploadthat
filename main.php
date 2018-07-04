<?php
    require('telegram-bot-api.php');

    $token = '10**************************************jM';
    $bot = new telegram_bot($token);
    $to = '@myChannel';
    $rs = $bot->send_message($to , 'test' , null, null);
        print_r($rs);
?>
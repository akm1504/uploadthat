<?php
    require('telegram-bot-api.php');

    $token = '585060714:AAEzvzzCKloTn3nqCC4o3kS9r1y71FkCYro';
    $bot = new telegram_bot($token);
    $to = '@akm1504';
    $rs = $bot->send_message($to , 'test' , null, null);
        print_r($rs);
?>

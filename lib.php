<?php
function sendMessage($telegram_id,$message_text) {
	$secret_token = "";
    $url = "https://api.telegram.org/bot".$secret_token."/sendMessage?&chat_id=".$telegram_id;
    $url = $url."&text=".urlencode($message_text);
    $url;
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

function sendPhoto($telegram_id,$img_dir) {
    $secret_token = "";
    $url = "https://api.telegram.org/bot".$secret_token."/sendPhoto?&chat_id=".$telegram_id;
    $post_fields = array('chat_id'   => $telegram_id,
    'photo'     => new CURLFile(realpath($img_dir))
    );
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $post_fields
    ); 
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

?>
<?php
require_once 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('5578179405:AAFJ5_VQw1glY_318-mybScrNQHGLwr8PME');

$result = $telegram->getWebhookUpdates();

$text = $result["message"]["text"];
$chat_id = $result["message"]["chat"]["id"];

if ($text == "/start") {
    $telegram->sendMessage([
        'chat_id' => $chat_id,
        'text' => 'Hello, world!'
    ]);
}

?>
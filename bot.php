<?php
// ambil data dari webhook
$update = json_decode(file_get_contents("php://input"), TRUE);

// cek apakah data ada atau tidak
if (isset($update)) {
    // kode untuk menangani permintaan webhook
}

$botToken = "5578179405:AAFJ5_VQw1glY_318-mybScrNQHGLwr8PME";
$webhookUrl = "https://gonime-bot.netlify.app/bot.php";

$url = "https://api.telegram.org/bot".$botToken."/setWebhook?url=".$webhookUrl;
$response = file_get_contents($url);

?>

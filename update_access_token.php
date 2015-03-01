<?php
include 'php_func.php';

$appid = "wx5838423fe605d950";
$secret = "97aaf6be50e8d70c509d98aedae66098";

$urlTpl = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s";
$url = sprintf($urlTpl, $appid, $secret);

echo http_get_data($url);
?>

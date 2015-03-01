<?php

$urlTpl  = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=%s";
$addid_data = json_encode(array('kf_account':'yf@izhuanche','nickname':'yf','password':'www123'));
list($return_code, $return_content) = http_post_data($url, $data);

?>

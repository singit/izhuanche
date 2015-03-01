<?php

define($acc_token, "n27iREFxCCqHJjhY-g2sYzMXXXt2y_YEEo82PMT7HGtZ3BJGLf0Ly1b8_g5TeB0gtVvCexcHsBmtXuLo9KQ83o3jm0nIp1JTlFgT3Nlpads");
$urlTpl  = "https://api.weixin.qq.com/customservice/kfaccount/add?access_token=%s";
$url = sprintf($urlTpl, $acc_token);
$addid_data = json_encode(array('kf_account':'yf@izhuanche','nickname':'yf','password':'www123456'));
list($return_code, $return_content) = http_post_data($url, $addid_data);

$fp = fopen("php.log","a+");
fwrite($fp, "return_code[$return_code] return_content[$return_content]\n");
fclose($fp);

?>

<?php
include 'php_func.php';

$acc_token ="5i1DGuAPTWV4zYxN7oY-_-4h6a_A9sjecEUns93irgNLHUH8X2XioBIIgbwE8892oru5j2g68DqK5nGk07ScG9F43bYavtVrMrLOD7oMyFo";
$urlTpl  = "https://api.weixin.qq.com/customservice/kfaccount/add?access_token=%s";
$url = sprintf($urlTpl, $acc_token);
$passwd = md5("www123456");
$addid_data = json_encode(array('kf_account'=>'yf123jo@gh_87b57b31bbe2','nickname'=>'yf123j','password'=>$passwd,));
$test_data = '{"kf_account":"yf123jo@gh_87b57b31bbe2","nickname":"yf123j","password":"c5200ce690fb082d1d3fe74759665583",}';
list($return_code, $return_content) = http_post_data($url, $test_data);

$fp = fopen("php.log","a+");
fwrite($fp, "req[$test_data]\nurl[$url]\n");
fwrite($fp, "return_code[$return_code]\nreturn_content[$return_content]\n");
fclose($fp);

?>

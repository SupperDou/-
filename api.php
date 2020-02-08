<?php
header("Access-Control-Allow-Origin:*");
date_default_timezone_set("PRC");
$result = file_get_contents("https://api.ooopn.com/yan/api.php");
$arr=json_decode($result,true);
if ($arr['hitokoto']) {
    header("Content-type: application/json;charset=UTF-8");
    //输出一句话时，改成 $arr['hitokoto']
    echo json_encode($arr,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}else{
    header("Content-Type:text/html;charset=UTF-8");
    echo '请求错误，请重新尝试';
}
?>

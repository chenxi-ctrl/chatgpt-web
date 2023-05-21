<?php


header( 'Content-Type:text/html;charset=utf-8 ');

require('./lib/init.php');


function GetUserIP(){

if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){

//为了兼容百度的CDN，所以转成数组

$arr = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);

return $arr[0];

}else{

return $_SERVER['REMOTE_ADDR'];

}

}


//判断数据库是否存在
$sfczmy = $_GET['miyao'];
$sql = "select miyao from chat_key where miyao='$sfczmy'";
if($mysql->getOne($sql)) {
    exit();
}



$miyao['miyao'] = $_GET['miyao'];
$miyao['ip'] = $_GET['ip'];
$miyao['time'] = date("Y-m-d H:i:s");
    
    
// $mysql->query(Pj('chat_key' , $miyao));







<?php
$sql = "select ggnrhtml from chat_admin where id = 1";
$ggnr = $mysql->getOne($sql);
if($ggnr == ''){
    echo '<p>哇！终于等到你啦！<strong>感恩有你</strong> ！不离不弃！</p>
<p>愿你有诗有梦，有坦荡的远方；愿你历遍山河，仍觉得人间值得!</p>
<p>会员务必加<strong>Q群:XXXX</strong>，防止本站域名失效打不开！</p>';
}else{
    print_r($ggnr);
}
?>


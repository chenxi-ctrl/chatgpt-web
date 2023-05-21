

<?php

require('../lib/init.php');

$str = $_GET['str'];

$sql = "select str from chat_mimazhaohui where str = '$str'";

if(!($mysql->getOne($sql))){
    exit();
}

$sql = "select youxiang from chat_mimazhaohui where str = '$str'";
$yhyxcx = $mysql->getOne($sql);


$sql = "select yhmc from chat_yonghu where yhyx = '$yhyxcx'";
$yhmcss = $mysql->getOne($sql);


?>











<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>修改密码页面</title>
	<link rel='dns-prefetch' href='//s.w.org' />

<link rel='stylesheet' id='buttons-css'  href='./assets/buttons.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='./assets/forms.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='./assets/l10n.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='./assets/login.min.css?ver=5.4.2' type='text/css' media='all' />
<script type="text/javascript" src="../jquery.js"></script>
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
	</head>
	<body class="login no-js login-action-lostpassword wp-core-ui  locale-zh-cn">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">

	<p class="message">请输入您的新密码重置即可。</p>

		<form>
		    
		    	<p>
				<label for="user_login">你的用户名</label>
				<input disabled type="text" name="user_login" id="user_login" class="input yhyhm" value="<?php echo $yhmcss;?>" size="20" autocapitalize="off" />
			</p>
		    
		    
			<p>
				<label for="user_login">新密码</label>
				<input type="text" name="user_login" id="user_login" class="input yhmhzmm" value="" size="20" autocapitalize="off" />
			</p>
						<input type="hidden" name="redirect_to" value="" />
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large hqxmm" value="修改" />
			</p>
		</form>

				<p id="backtoblog"><a href="../index.php">
		&larr; 返回到首页		</a></p>
			</div>
			
			
			
			<script type="text/javascript">
			
			
function preventSubmit(event) {
  event.preventDefault();
}

document.querySelector('form').addEventListener('submit', preventSubmit);
		
		
		
		
		$('.hqxmm').click(function(){
 
 	$('.hqxmm').val('等待...');
 
 
 var yhmhzmm = $('.yhmhzmm').val();
 
  var yhyhm = $('.yhyhm').val();
 
 var urlParams = new URLSearchParams(window.location.search);
var str = urlParams.get('str');
 
 
 
 if(yhmhzmm == ''){
     alert('请先输入修改的密码');
        event.stopImmediatePropagation();
                                return false;
 }
 
		    $.ajax({
                  url: "zhaohuiapi.php",
                  type: "POST",
                  data: {
                      str:str,
                      yhyhm:yhyhm,
                      xinmima: yhmhzmm, 
                      'biaoshi': "修改密码"
                  },
                  dataType: "json",
                  success: function(response) {
                      
                      if(response.code == 1){
                             alert(response.msg);
                              $('.hqxmm').val('修改');
 
                             event.stopImmediatePropagation();
                             return false;
                      }
                      
                      
                      
                      if(response.code == 0){
                             alert(response.msg);
                              $('.hqxmm').val('修改');
 
                             event.stopImmediatePropagation();
                                return false;
                      }
                      
                      
        
                  },
               
                });
                
                
		    
		});
		
		
		
		
		</script>
		
		
		
		
			<div class="clear"></div>
	</body>
	</html>
	
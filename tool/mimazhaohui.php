<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>忘记密码</title>
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

	<p class="message">请输入您的用户名或电子邮箱地址。您会收到一封包含重设密码指引的电子邮件。</p>

		<form>
			<p>
				<label for="user_login">用户名或电子邮件地址</label>
				<input type="text" name="user_login" id="user_login" class="input yhmhzmm" value="" size="20" autocapitalize="off" />
			</p>
						<input type="hidden" name="redirect_to" value="" />
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large hqxmm" value="获取新密码" />
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
		





// 从本地存储中获取上一次点击时间
let lastClickTime = localStorage.getItem('lastClickTime') || 0;


		$('.hqxmm').click(function(){
		    
		    
 // 获取当前时间
  const currentTime = new Date().getTime();

  // 判断时间差是否大于等于5分钟
  if (currentTime - lastClickTime >= 1 * 60 * 1000) {
    // 允许发送邮件
    lastClickTime = currentTime;
    // 将上一次点击时间保存到本地存储中
    localStorage.setItem('lastClickTime', lastClickTime);
    
		    
		    

 var yhmhzmm = $('.yhmhzmm').val();
 
 
 if(yhmhzmm == ''){
     alert('请先输入用户名或者用户名绑定的邮箱地址');
        event.stopImmediatePropagation();
                                return false;
 }
 
  
 	$('.hqxmm').val('邮件发送中...');
 
 
 $('.hqxmm').prop('disabled', true);
 
 
 
		    $.ajax({
                  url: "zhaohuiapi.php",
                  type: "POST",
                  data: {
                      yhmhzmm: yhmhzmm, 
                      'biaoshi': "找回密码"
                  },
                  dataType: "json",
                  success: function(response) {
                      
                      if(response.code == 1){
                             
                             if (response.msg.indexOf("发送成功") !== -1) {
                                    alert('邮件发送成功');
                                  $('.hqxmm').val('获取新密码');
                                        //   location.reload();
                             
                              
 $('.hqxmm').prop('disabled', false);
 
                             
                                event.stopImmediatePropagation();
                                return false;
                                }else{
                
                                    alert('邮件发送失败');
                                    $('.hqxmm').val('获取新密码');
                                        //   location.reload();
                                                           
 $('.hqxmm').prop('disabled', false);
                                    event.stopImmediatePropagation();
                                     return false;
                                }
                             

 
                             event.stopImmediatePropagation();
                                return false;
                      }
                      
                
                      if(response.code == 0){
                             alert(response.msg);
                              $('.hqxmm').val('获取新密码');
                               
 $('.hqxmm').prop('disabled', false);
                             event.stopImmediatePropagation();
                                return false;
                      }
                      
                      
        
                  },
               
                });
                
    
    
    
  } else {
    // 不允许发送邮件
    alert('请勿频繁发送邮件 5分钟只允许发一次邮件！');
  }	    
		    
		    
		    
		    

                
		    
		});
		
		
		
		
		</script>
		
		
		
		
			<div class="clear"></div>
	</body>
	</html>
	
<?php

$gengxin = 'active';

require('./sql.php');

require('../tool/gengxin.php');


if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}

require('./view/header.php');

?>


<style>
    .text-nowrap {
    white-space: unset!important;
}
</style>




 <div class="container">
     <div class="page-header">
              <h1 class="page-title">
                更新检测
              </h1>
            </div>
         
        

                    <div class="card">
                      <div class="card-body">
                   
                        <h4 class="card-title"><a href="javascript:void(0)">更新检测</a></h4>
                        <div class="card-subtitle">
                          你当前的版本:<?php require('./banben.php')?>
                        </div>
                        <div class="mt-5 d-flex align-items-center">
                    
                          <div class="ml-auto jcgx">
                            <a href="javascript:void(0)" class="btn btn-primary">点我检测更新</a>
                          </div>
                        </div>
                        
                        
                        
                              <div class="card-subtitle">   
                        <br>
                           <p>更新日志:(如果在线更新失败 或者更新出现BUG 请下载完整包重新安装)</p>
         <br> 
         
         
 V4.8.2<br>          
新增Midjourney绘图功能 原意间已删除<br>
修复绘画页面公告弹出的判断小BUG<br>
新增后台可自定义ChatGPT回复随机性数值<br>
新增后台可自定义保留多少次连续对话数值  <br>    
         <br>
         
         
         
 V4.8.1<br>         
新增ChatGPT初始预设值后台可以自定义修改和删除<br>  
新增后台可以自定义修改用户密码功能<br>  
优化网站公告内容到数据库 只需要重新修改最后一次公告 下次就不需要每次都需要了<br>  
修复4.8.0版本导致的连续对话顺序不正确BUG 重大BUG 务必更新<br>  
修复一个COOKIE BUG 数据太多网站会出现400报错<br>  
新增电脑端网站前台自定义快捷键发送切换 可以Enter直接发送了  <br>         
         <br>  
         
         
         
          V4.8.0<br>      
调整ChatGPT回复随机性为0.8参数<br>   
新增判断是否指定PHP7.3版本运行 如果不是请切换版本<br>   
新增程序在线安装功能<br>   
优化复制按钮手机端有点错位的问题<br>   
修复上下文长度超限BUG<br>   
指定一个ChatGPT3.5的初始设定   <br>   
         <br>   
         
         
         
         
        V4.7.9<br>   
优化手机端提问体验<br>   
修复手机端提问字数过多遮挡按钮BUG<br>   
优化复制按钮图标上下左右不对成<br>   
优化OL有序标签显示数字序列<br>   
新增赞助功能 赞助按钮显示在Ai的答复里面 可自行开启关闭<br>   
修复一个订单提交小BUG<br>  
修复购买套餐页面不需要登陆也可以访问BUG<br>  
修复后台付费用户不正确BUG<br>  
修复前台用户开通会员后仍然显示升级会员字样BUG<br>  


         <br>   
         
         
         
V4.7.8<br>             
优化公告弹出必须点击"我记住啦"才可以关闭 防止用户误触没看到公告<br>             
优化手机端输入框有时候不下滑BUG<br>             
修复后台KEY密钥自动增加BUG<br>             
新增是否开启前台客服按钮开关<br>             
新增回答复制功能      <br>             
         <br>             
         
         
         
                           
V4.7.7<br>                           
修复少部分密码注册后无法登录的BUG<br>
新增QQ/微信内打开跳转浏览器提示页 可自行开启关闭<br>                      
          <br>
          
          
                           
V4.7.6<br>                          
修复数据库用户密码明文加密后导致的修改密码失效BUG<br>  
优化代码结构 提高加载速度<br>  
新增网页加载效果<br>  
新增客服弹窗     <br>      
对齐导航栏图标<br>

                           
                       <br>      
V4.7.5<br>                               
新增用户自助找回密码功能 需要对接邮箱<br> 
优化邮箱发送被刷风险 现已改为1分钟只允许发送一次<br> 
优化触发违禁词之后无法终止对话只能刷新的问题<br> 
新增图片点击放大功能<br> 

<br> 
                           
V4.7.4<br>                           
继续优化输入框发送速度 提问更加丝滑 4.7.3版还是有点小BUG<br> 
优化用户未注册免费次数用完后按钮恢复成待发送状态<br>                            
                           <br> 
                           
V4.7.3<br> 
紧急修复一个绘画4.7.2导致的无限提问绘画BUG<br> 
优化用户开通会员后首页显示尊贵会员<br> 
修复后台今日收入显示不正确BUG<br> 
<br> 

V4.7.2<br> 
新增后台批量查KEY余额<br> 
修复邮箱可反复注册的BUG<br> 
修复每个IP注册只允许注册一次无法拦截BUG<br> 
优化前端UI手机端小BUG<br> 
修复SQL语句执行错误<br> 
修复暗黑模式下QQ打开不兼容的问题<br> 
修复邮件注册只能给QQ邮箱发送邮件的BUG<br> 
新增后台可以更改用户绘画剩余次数<br> 
修复数据库用户注册后密码明文显示BUG<br> 
优化输入框发送速度<br>
<br> 

V4.7.1<br> 
新增绘图功能<br> 
新增用户IP封禁 用来封一些白嫖党 禁止访问网站<br> 
修复邮件配置后 后台测试成功 前台发送不成功的BUG<br> 
隐藏购买套餐页面显示用户名<br> 
添加购买套餐弹出提示:虚拟商品不允许退款 防止因为有些人买了来退款<br> 
删除首页登录窗口输入用户名那的邮箱登录提示 邮箱实则不可以登录<br> 
新增API反代接口配置 配置好反代接口 国内VPS也可以搭建<br> 
新增后台可以一键查看KEY密钥剩余余额<br> 
修复暗夜模式输入框写入内容后顶部出现一个DIV挡住主页面<br> 
修复暗色模式切换BUG<br> 
修复特殊情况下用户提问不扣除次数的BUG<br> 
修复其它未知BUG<br> 
<br> 



V4.7<br>  
优化系统注册登录的安全性<br>  
新增邮件发送注册<br>  
新增每个IP只能注册一次的返回提示<br>  
新增后台可以设置默认网站是白天还是暗黑模式<br>  
新增网站公告 界面UI很好看<br>  


<br>  

V4.6<br>  
修复打开后台有点卡顿的问题<br>  
修复次数密钥可以无限兑换的BUG<br>  
前台对话增加头像 自动获取用户QQ头像<br>  
修复快捷键发送判断违禁词失效BUG<br>  
修复一个其它BUG<br>  
修复切换暗夜模式手机端导航不变色BUG<br>


<br>  


V4.5<br>  
优化鼠标光标网页加载卡顿一会<br>  
新增网页暗黑模式和白天模式随意更换<br>  
删除提问加载转圈圈 改为Ai正在思考中<br>  
彻底解决提问频繁问题 只要你多设置几个密钥即可 随机获取<br>  
新增卡密充值功能 后台可以设置开启和关闭 卡密在后台生成即可<br>  
新增用户邀请分销功能 分销比例后台可设置 也可以设置跳板域名 防屏蔽<br>  
新增对话保存 可以新增对话了 对话可删除修改名称<br>  
用户的到分销金额也可以设置多少可以体现 用户也可自行充值套餐<br>  
新增每个IP只能注册一次<br>  
新增违禁词 违禁词后台自己设置<br>  
优化前端界面UI细节<br>  
修复若干回调BUG<br>  
新增后台用户提问可查看<br>  

<br>  
V4.4<br>  
新增注册用户赠送次数自定义<br>  
修复前端密钥明文<br>  

<br>  

V4.3<br>  
优化首页加载CSS 之前加载的时候div块会往左边跑<br>
代码安全性逻加强<br>

<br>

                V4.2:<br>     
                修复41版本前端输入框换行被遮挡<br>
                 优化key密钥获取机制 随机获取防止频繁<br>

  <br>
       

  V4.0:<br>
  前端输入框重写<br>
  优化发送按钮<br>
  其它细节优化<br>
修复部分版本的浏览器Ai回答文字显示不全<br>
修复首页无法滑动问题<br>

   <br>
          
                              V3.9:<br>
                            优化用户中心 新增用户中心footer页脚 新增用户中心右侧选项卡<br>
                           新增用户中心用户可以更改密码<br>
                           新增后台可以更改用户的提问次数和会员相关设置<br>
                           新增后台可以更改管理员密码或账户<br>
                           优化后台使其美观了一些<br>
                             优化用户中心的列表显示 可以显示金额<br>
                             新增用户中心可以显示用户的剩余次数和会员到期时间<br>
                           
                           <br>
                           
                              V3.8:<br>
                           
                           新增后台一键自动更新<br>
                           优化若干CSS<br>
                           修复前端Ctrl+Cnter无视规则提交BUG<br>
                           
                           <br>
                           
                           V3.2:<br>

新增后台，所有配置都可以在后台设置<br>

今日收入，付费用户，注册用户所有数据一目了然<br>

新增支付配置，支付宝或微信自定义切换<br>

新增免费试用次数自定义，默认1<br>

新增关闭网站收费功能<br>

新增套餐价格自定义后台修改<br>

新增无限key轮询功能，后台自己导入<br>

优化前端CSS，用户登陆后窗口可关闭<br>

新增是否开启用户每日都有免费体验次数(默认关闭)<br>

            </div>
            
            
            
            
            
            
                        
                      </div>

                      
                    </div>
          
         
     
         
</div>
                  </div>
                </div>
             </div>


              
                 
              <script>
                  

          
  var count = 0; // 初始化计数器变量                
  $('.jcgx').click(function(event){
      
      count++; // 每次点击计数器加1

      
      $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">正在检测...</a>');


if(count == '1'){
    


$.ajax({
  type: "POST",
  url: "/admin/ajax.php?gengxin=1", //需要写云端连接
     dataType: "json",
  data: {
      banben:"<?php require('./banben.php')?>",
  },
  traditional: true,
  success: function(response) {
      

    if(response.banben == '1'){
      $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">点我检测更新</a>');
      
                 alert(response.nr);
     
         location.reload();
     
                 event.stopImmediatePropagation();
                 return false;
                 
    }else{


        $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">'+response.nr+'</a>');


$.ajax({
  type: "POST",
  url: "/admin/zaixiangengxin.php",
     dataType: "json",
  data: {
      banben:"<?php require('./banben.php')?>",
  },
  traditional: true,
  success: function(response) {
      
      if(response == '1'){
          
          $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">更新成功 等待刷新...</a>');
          
     
                  setTimeout(function() {
       
                    location.reload();
               
          }, 1000);
          
     
      }else{
            $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">更新失败 请联系管理员 等待刷新...</a>');
            
              setTimeout(function() {
              
               location.reload();
          }, 2000);
          
            
            
      }
      
            
  },

});
  
  


    // $('.jcgx').removeClass("jcgx");
    
        //   $('.jcgx').html('<a href="zaixiangengxin.php?banben=3.6" class="btn btn-primary zxgx">'+response.nr+'</a>');

        
    }

      
    
  },

});
                      
        
      
    
    
}
    
                  });
   
              </script>   
          









<?php
require('./footer.php');
?>
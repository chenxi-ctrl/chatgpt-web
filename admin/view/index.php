<?php
require('./header.php');
?>




<style>
    
    .row-deck > .col .card, .row-deck > [class*='col-'] .card {
    -ms-flex: 1 1 auto;
   flex: unset!important;
}
    
</style>

<style>
    .text-nowrap {
    white-space: unset!important;
}
</style>


        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                仪表盘
              </h1>
            </div>








                <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-blue"><?php echo $syyh;?>位</div>
                        <h3 class="mb-1"><?php echo $syyh;?></h3>
                        <div class="text-muted">本站用户</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-1" style="height: 100%"></div>
                      </div>
                    </div>
                
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-blue"><?php echo $jinirshour;?>元</div>
                        <h3 class="mb-1"><?php echo $jinirshour;?></h3>
                        <div class="text-muted">今日收入</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-2" style="height: 100%"></div>
                      </div>
                    </div>
                
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                       <div class="card-value float-right text-red"><?php echo $symm;?>个</div>
                        <h3 class="mb-1"><?php echo $symm;?></h3>
                        <div class="text-muted">导入的密钥数量</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-3" style="height: 100%"></div>
                      </div>
                    </div>
             
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-yellow"><?php echo $ffyh?>个</div>
                        <h3 class="mb-1"><?php echo $ffyh?></h3>
                        <div class="text-muted">付费用户</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-4" style="height: 100%"></div>
                      </div>
                    </div>
                 
                  </div>
                </div>










           <div class="row row-cards row-deck">
               
          <div class="col-lg-6">
                <div class="card card-aside">
                  <a href="#" class="card-aside-column" style="background-image: url(../assets/2019062111331669100351.jpg)"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">官方开发者：<?php echo $glymz;?></a></h4>
                    <div class="text-muted">有问题联系客服。</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./view/qq.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default"><?php echo $glymz;?></a>
                        <small class="d-block text-muted">ChatGPT系统</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card card-aside">
                  <a href="#" class="card-aside-column" style="background-image: url(../assets/2019062110341549975527.jpg)"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a>域名授权状态:</a></h4>
                    
                    <div class="text-muted ymsqzt">检测中...</div>
                    
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./view/qq.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default"></a>
                        <small class="d-block text-muted">授权状态.</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">最新注册:</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          <th>用户名</th>
                          <th>注册时间</th>
                         <!--<th>修改</th>-->
                        </tr>
                      </thead>
                      <tbody>
                          
                          
         
                   
                 <?php foreach($zcyh as $k => $v){  ?>      
                    
                    
                    
                                 
                        <tr>
                         
                          <td><?php echo $v['id'];?></td>
                          <td>
                     
<?php echo $v['yhmc'];?>
                          </td>
                          
                           <td><?php echo $v['time'];?></td>
                          
                          
                          <!--<td>-->
                          <!--  <a class="icon" href="javascript:void(0)">-->
                          <!--    <i class="fe fe-edit"></i>-->
                          <!--  </a>-->
                          <!--</td>-->
                        </tr>
                 
                 
                <?php  } ?>
             
                   
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              
              
              
            
            <script>
              
              
                 setTimeout(function() {
                                      

$.ajax({
                 url:"../ajax.php?sqjc=1",
                 dataType: "json",
                            type:"POST",
                             async: false,
                            data:{},
                       success: function(data){
         
              if(data.yumwsq == '1'){
                              
                    alert(data.nr);
                  $('.ymsqzt').html('域名未授权');
                  
                 event.stopImmediatePropagation();
                 return false;
              }else{
                   $('.ymsqzt').html('已授权');
              }
   
  }
                            
}); 
            }, 3000);
                       







            </script>
            
            
              <div class="col-md-6">
     
             
                <form class="card" action="" method="post"  id="myForm">
                  <div class="card-body">
                    <h3 class="card-title">网站配置信息修改</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">管理员</label>
                          <input type="text" class="form-control zhanghu" name="zhanghu" value="<?php echo $gly['user']?>">
                        </div>
                      </div>
                      
           
                      
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">账户密码</label>
                          <input type="txt" class="form-control zhanghumima" name="zhanghumima" value="<?php echo $gly['pass']?>">
                        </div>
                      </div>
                      
                      
                      
                      <div class="col-sm-6 col-md-12">
                        <div class="form-group">
                          <label class="form-label">网站名称</label>
                          <input type="text" class="form-control" name="title" value="<?php echo $gly['wzmc']?>">
                        </div>
                      </div>
                      
                      
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">站点描述</label>
                          <input type="text" class="form-control" name="zdms" value="<?php echo $gly['zdms']?>">
                        </div>
                      </div>


                      
                      <?php
                      
                      
                      
                      //判断数据库
                      $sql = "select youurl from chat_admin where id = 1";
                      if($mysql->getOne($sql)){
                          $current_urldq = $mysql->getOne($sql);
                      }else{
                          $current_urldq = $_SERVER['HTTP_HOST'];
                      }
                      
                      
                      
                      ?>
                      
             <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">你的主域名 不需要http，例如:baidu.com</label>
                          <input type="text" class="form-control youurl" name="youurl" value="<?php echo $current_urldq; ?>">
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">定义跳板域名(防止分销功能导致主域屏蔽) 不需要http，例如:baidu.com 需要注意的是:跳板域名!=你的主域名 不要把你的主域名写进去 否则网站打不开！</label>
                          <input type="text" class="form-control tiaobanurl" name="tiaobanurl" value="<?php echo $gly['tiaobanurl']?>">
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">用户注册后赠送多少次免费次数</label>
                          <input type="text" class="form-control zcsdscs" name="zcsdscs" value="<?php echo $gly['sfkqzczs']?>">
                        </div>
                      </div>
                      
                                  
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">用户分销分佣百分比(默认百分之30)</label>
                          <input type="text" class="form-control fanli" name="fanli" value="<?php echo $gly['fanli']?>">
                        </div>
                      </div>
                      
                      
                  <div style="display:none;" class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">用户推广得佣金提现还是赠送提问次数(1为佣金,0为次数)</label>
                          <input type="text" class="form-control cishuoryongjin" name="cishuoryongjin" value="<?php echo $gly['cishuoryongjin']?>">
                        </div>
                      </div>
                      
                      
                      
                      
                <div  class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">用户余额多少可提现</label>
                          <input type="text" class="form-control dsktxye" name="dsktxye" value="<?php echo $gly['dsktxye']?>">
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      <!--<div class="col-sm-6 col-md-6">-->
                      <!--  <div class="form-group">-->
                      <!--    <label class="form-label">博客</label>-->
                      <!--    <input type="text" class="form-control" name="url" value="<?php echo $wzpz['url']?>">-->
                      <!--  </div>-->
                      <!--</div>-->


       <!--                      <div class="col-sm-6 col-md-6">-->
       <!--                 <div class="form-group">-->
       <!--                   <label class="form-label">在线授权公告</label>-->
       <!--                   <input type="text" class="form-control" name="sqgg" value="<?php echo $wzpz['sqgg']?>">-->
       <!--                 </div>-->
       <!--               </div>-->




       <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">不注册用户默认提问次数(0不开启试用)</label>
                          <input type="text" class="form-control" name="mfcs" value="<?php echo $gly['mfcs']?>">
                        </div>
                      </div>

                     <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启用户每日都有免费次数(默认关闭)</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $kaiqi; ?> class="form-check-input" type="radio" name="mtmfcs" value="1" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $guanbi; ?> class="form-check-input" type="radio" name="mtmfcs" value="0">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>





                     <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启网站收费功能(默认开启)</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $kaiqisf; ?> class="form-check-input" type="radio" name="sfsf" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $guanbisf; ?> class="form-check-input" type="radio" name="sfsf" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>
                          
                          
                          
                          
                          
                          
                     <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启网站卡密充值功能</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $kaiqisfkm; ?> class="form-check-input" type="radio" name="kamikaqim" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $guanbisfkm; ?> class="form-check-input" type="radio" name="kamikaqim" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>
                          
                          
                          
                          
                          
                          
                          
                          
                       <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">网站暗黑模式还是白天模式(默认暗黑)</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $kaiqisfanh; ?> class="form-check-input" type="radio" name="bthsanh" value="1" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $guanbisfanh; ?> class="form-check-input" type="radio" name="bthsanh" value="0">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>           
                          
                          

                          
                          

       <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">卡密充值购买链接(需要添加:http://)</label>
                          <input type="text" class="form-control kamilj" name="kamilj" value="<?php echo $gly['kamilj']?>">
                        </div>
                      </div>





  <div class="col-sm-12 col-md-12">
      <div class="form-group">
                            <div class="form-label">支付配置</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $zfb; ?> class="form-check-input" type="radio" name="zffs" value="支付宝" >
                                <span class="form-check-label">开启支付宝</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $wxf; ?> class="form-check-input" type="radio" name="zffs" value="微信">
                                <span class="form-check-label">开启微信</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $all; ?> class="form-check-input" type="radio" name="zffs" value="all">
                                <span class="form-check-label">两个都开启</span>
                              </label>
                            </div>  </div>
                          </div>


                        <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">支付配置(易支付ID:)</label>
                          <input type="text" class="form-control" name="yzfid" value="<?php echo $gly['yzfid']?>">
                        </div>
                      </div>
                         <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">支付配置(易支付密钥:)</label>
                          <input type="text" class="form-control" name="yzfmy" value="<?php echo $gly['yzfmy']?>">
                        </div>
                      </div>
               
                     
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <label class="form-label">支付配置(易支付域名:)</label>
    
                           <input type="text" class="form-control" name="yzfym" value="<?php echo $gly['yzfym']?>">
                        </div>
                      </div> 





                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary gxpz">更新配置</button>
                  </div>
                </form>
         
         
         
         
         
         
         
        
             
<script>

//判断是否修改了账户和密码

var sfxgmmhzh = false;
$('.gxpz').click(function(event){
    
    $('.gxpz').html('正在更新...');
    
    
   var zhanghu = $('.zhanghu').val();
   var zhanghumima = $('.zhanghumima').val();
   var zcsdscs = $('.zcsdscs').val();
   var fanli = $('.fanli').val();
   
   var cishuoryongjin = $('.cishuoryongjin').val();
   var dsktxye = $('.dsktxye').val();
   
   var kamilj = $('.kamilj').val();
   
    var tiaobanurl = $('.tiaobanurl').val();
   var youurl = $('.youurl').val();
   
   
   
  $.ajax({
  type: "POST",
  url: "../tool/ajax.php",
 
  
  data:{
        zcsdscs:zcsdscs,
        zhanghu:zhanghu,
        fanli:fanli,
        zhanghumima:zhanghumima,
        cishuoryongjin:cishuoryongjin,
        dsktxye:dsktxye,
        kamilj,kamilj,
        tiaobanurl,tiaobanurl,
        youurl:youurl,
       'biaoshi':'管理员密码修改', 
       'dlhm':"<?php echo $_COOKIE['aname'];?>"
        
  },
     dataType: "json",
  traditional: true,
  async: false, // 使用同步模式
  success: function(response) {
      
      
                if(response.nr == '没有修改密码或者账户'){
                    sfxgmmhzh = false;
                }
      
                
                if(response.nr == '修改密码和账户成功'){
                    sfxgmmhzh = true;
                }
                
                if(response.nr == '修改用户名成功'){
                    sfxgmmhzh = true;
                }
                
                if(response.nr == '修改密码成功'){
                    
             
                    
                    sfxgmmhzh = true;
                }
   
          },
        });
        

});
    
    
    
    
    




    // 获取表单元素和提交按钮
var form = document.getElementById("myForm");
var submitBtn = form.querySelector("button[type='submit']");

// 监听表单提交事件
form.addEventListener("submit", function(event) {
  event.preventDefault(); // 阻止表单默认提交行为

  // 获取表单数据
  var formData = new FormData(form);

  // 发送ajax请求
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "/admin/index.php?wzpz=1");
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
      
      if(xhr.responseText == 1){
          
          if(sfxgmmhzh){
              
              alert('你修改了账户 即将退出登录');
              // 清除所有cookie
            window.location.href = "login.php";

  
              
          }else{
              
              $('.gxpz').html('更新配置');
              
              alert('修改成功');
              
              
              location.reload();
              
          }
          
          
          
          
      }else{
           alert('修改失败 请联系管理员');
      }
      
    }
  };
  xhr.send(formData,false);
});
</script>





              </div>
    
         
         
         
         
         <div class="col-md-6">
             <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">套餐次数价格修改</h3>
                    </div>
                    <div class="card-body">
       
                      <div class="form-label">套餐次数价格修改</div>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>价格(单位元)</th>
                              
                              
                              <th>次数</th>
                            </tr>
                          </thead>
                          <tbody>
                              
                              
                              <?php
                              
                              $sql = 'select * from chat_taocan where id < 4';
                                $sytc = $mysql->getAll($sql);
                                                      
                              foreach ($sytc as $k => $value) {
                                 
                                 echo '   <tr>
                              <td>
                                <input type="text" class="taocanjiage-'.$k.' form-control" value="'.$value['taocanjiage'].'">
                              </td>
                              <td>
                                <input type="text" class="taocangedu-'.$k.' form-control" value="'.$value['taocangedu'].'">
                              </td>
                            </tr>';
                                 
                              }
                              
                              
                              
                              ?>
                              
                              
                              
                         
                            
                            
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button  class="btn btn-primary xgjiag" onclick="submitData()">修改</button>
                      
                      
                      
                      
                                   
<script>


function submitData() {
    
// 获取表格中的输入框元素
var taocanjiageInputs = document.querySelectorAll('[class^="taocanjiage-"]');
var taocangeduInputs = document.querySelectorAll('[class^="taocangedu-"]');


console.log(taocangeduInputs);

// 准备发送的数据
var data = [];
for (var i = 0; i < taocanjiageInputs.length; i++) {
  var taocanjiage = taocanjiageInputs[i].value;
  var taocangedu = taocangeduInputs[i].value;
  
  var data = {
      id:i+1,
  taocanjiage: taocanjiage,
  taocangedu: taocangedu
};
  
  $.ajax({
  type: "POST",
  url: "/admin/index.php?jgxg=1",
  data: data,
  traditional: true,
  success: function(response) {
      

           if(response == 1){
            alert('修改成功');
          
          }
      
      
    
  },
  error: function(error) {
    console.log(error);
  }
});
  
}




  
}
</script>

                      
                      
                      
                      
                      
                    </div>
                  </div>
                </div>
         
         
         
         
         
         
         
         
         
         
          
         <div class="col-md-6">
             <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">套餐会员价格修改</h3>
                    </div>
                    <div class="card-body">
       
                      <div class="form-label">套餐会员价格修改(因为是会员 次数无限次)</div>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>价格(单位元)</th>
                              
                              
                              <th>时间(单位月) 时间无法修改</th>
                            </tr>
                          </thead>
                          <tbody>
                              
                              
                              <?php
                              
                              $sql = 'select * from chat_taocan where id >= 4';
                                $sytc = $mysql->getAll($sql);
                                                      
                              foreach ($sytc as $k => $value) {
                                 
                                 echo '   <tr>
                              <td>
                                <input type="text" class="taocanjiage2-'.$k.' form-control" value="'.$value['taocanjiage'].'">
                              </td>
                              
                              ';
                            
                            
                            if($k == 0){
                                echo '<td>
                                <input disabled type="text" class="taocangedu2-'.$k.' form-control" value="一个月">
                              </td>
                            </tr>';
                            }
                            
                          if($k == 1){
                                echo '<td>
                                <input disabled type="text" class="taocangedu2-'.$k.' form-control" value="三个月">
                              </td>
                            </tr>';
                            }
                            
                              if($k == 2){
                                echo '<td>
                                <input disabled type="text" class="taocangedu2-'.$k.' form-control" value="一年">
                              </td>
                            </tr>';
                            }
                            
                            
                                 
                              }
                              
                              
                              
                              ?>
                              
                              
                              
                         
                            
                            
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button  class="btn btn-primary xgjiag" onclick="hyxg()">修改</button>
                      
                      
                      
                      
                                   
<script>


function hyxg() {
    
// 获取表格中的输入框元素
var taocanjiageInputs = document.querySelectorAll('[class^="taocanjiage2-"]');
var taocangeduInputs = document.querySelectorAll('[class^="taocangedu2-"]');


console.log(taocangeduInputs);

// 准备发送的数据
var data = [];
for (var i = 0; i < taocanjiageInputs.length; i++) {
  var taocanjiage = taocanjiageInputs[i].value;
  var taocangedu = taocangeduInputs[i].value;
  
  var data = {
      id:i+4,
  taocanjiage: taocanjiage,
  taocangedu: taocangedu
};
  
  $.ajax({
  type: "POST",
  url: "/admin/index.php?hyxg=1",
  data: data,
  traditional: true,
  success: function(response) {
      

           if(response == 1){
            alert('修改成功');
          
          }
      
      
    
  },
  error: function(error) {
    console.log(error);
  }
});
  
}




  
}
</script>

                      
                      
                      
                      
                      
                    </div>
                  </div>
                </div>
         
         
         
         
         
         
         
         
         <div class="col-md-6">
              <div class="card">
                <div class="card-body yuecxxx">
                    
                  <h3 class="card-title">密钥Key设置 支持设置多个 支持轮询 👉<a style="color:blue;" class="plcye" href="javascript:void(0)">一键查询全部余额</a></h3>
                  
                  <p class="card-subtitle">下方就是你设置的Key:</p>
                 
                 
                 
                 
                
                 
                 
                 
                 
                 <?php
                 
                 
              $sql = 'select * from chat_key where sfky = 1 order by id asc';
              $mysfwk = $mysql->getAll($sql);
                 
               if(empty($mysfwk)){
                   
                   echo ' <div class="input-icon">
                    <input type="text" value="你当前还没有设置一个密钥Key" class="form-control" placeholder="Search…" readonly="">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/files -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 3v4a1 1 0 0 0 1 1h4"></path><path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z"></path><path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path></svg>
                    </span>
                  </div>';
                   
                   
               }else{
                   
                   
                   foreach ($mysfwk as $k => $value) {
                       
                       
                        echo ' <div style="    width: 90%;" class="input-icon">
                    <input type="text" value="'.$value['miyao'].'" class="form-control myhq" placeholder="Search…" readonly="">
                   
                    
                    
                  </div>
                  
                  
                  
          
                  
                  
                 
                 <td  class="text-center">
                            <div style="    float: right;
    margin: -31px 0px 0 2px;"  class="item-action dropdown show">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-177px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                              
                                
                                <a href="javascript:void(0)" onclick=chaxyu("'.$value['miyao'].'") class="dropdown-item"> 查询余额 </a>
                                
                                  <a href="/admin/index.php?miyao='.$value['miyao'].'" class="dropdown-item"> 删除 </a>
                                
                            
                              </div>
                            </div>
                          </td>
                  
                  
                 
                  
                  
                  <br>';
                       
                       
                   }
       
                   
               }
                 
                 
           
                 
                 ?>
                 
                 
                 
                 
                 
                 
        
                 
              <style>
  /* 提示弹窗样式 */
  .alert {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
  }
  .alert.show {
    opacity: 1;
  }
</style>   


<div class="alert alert-success alert-dismissible fade" role="alert">
  <strong>提示：</strong>正在查询中请稍等...
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"></span>
  </button>
</div>



                 <script>
//   $(function () {
//     // 显示提示弹窗
//     $('.alert').addClass('show');
//     // 3 秒后自动隐藏提示弹窗
//     setTimeout(function () {
//       $('.alert').removeClass('show');
//     }, 3000);
//   });
</script>
                 
                 
                 
                 
                 
                 
                 
                 <script>
     var _0x5164=['val','total_usage','YYYY-MM-DD','http://','padStart','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}','replace','Bearer\x20','access_until','GET','constructor','exception','click','console','YYYY-MM-DD\x20HH:mm:ss','getMonth','debug','table','each','return\x20/\x22\x20+\x20this\x20+\x20\x22/','https://','chat.chatgpt-vip.site/v1/dashboard/billing/usage?start_date=','getMinutes','trace','chat.chatgpt-vip.site/v1/dashboard/billing/subscription','warn','https:','addClass','.alert','.yuecxxx\x20input','ajax','.yuecxxx\x20input[value=\x22','toString','apply','show','log','getFullYear','error','protocol','application/json','push','getHours','hard_limit_usd','removeClass','input[value=\x22','info','剩余:'];(function(_0x5cfffa,_0x5164ac){var _0x15e4a1=function(_0xbd450d){while(--_0xbd450d){_0x5cfffa['push'](_0x5cfffa['shift']());}};var _0x3a65c0=function(){var _0x52b615={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x5f47fc,_0x53dc3a,_0x1a68e5,_0x3e77f5){_0x3e77f5=_0x3e77f5||{};var _0x51dcc8=_0x53dc3a+'='+_0x1a68e5;var _0x7bef4=0x0;for(var _0x5b6ae5=0x0,_0x2a5ba3=_0x5f47fc['length'];_0x5b6ae5<_0x2a5ba3;_0x5b6ae5++){var _0x4fb265=_0x5f47fc[_0x5b6ae5];_0x51dcc8+=';\x20'+_0x4fb265;var _0x57c388=_0x5f47fc[_0x4fb265];_0x5f47fc['push'](_0x57c388);_0x2a5ba3=_0x5f47fc['length'];if(_0x57c388!==!![]){_0x51dcc8+='='+_0x57c388;}}_0x3e77f5['cookie']=_0x51dcc8;},'removeCookie':function(){return'dev';},'getCookie':function(_0x5c0239,_0x20c57a){_0x5c0239=_0x5c0239||function(_0x5801d9){return _0x5801d9;};var _0x3562d5=_0x5c0239(new RegExp('(?:^|;\x20)'+_0x20c57a['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x5d652e=function(_0x1ba272,_0x2ae3d6){_0x1ba272(++_0x2ae3d6);};_0x5d652e(_0x15e4a1,_0x5164ac);return _0x3562d5?decodeURIComponent(_0x3562d5[0x1]):undefined;}};var _0x166b7c=function(){var _0x24529f=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x24529f['test'](_0x52b615['removeCookie']['toString']());};_0x52b615['updateCookie']=_0x166b7c;var _0x2d202a='';var _0x3e608f=_0x52b615['updateCookie']();if(!_0x3e608f){_0x52b615['setCookie'](['*'],'counter',0x1);}else if(_0x3e608f){_0x2d202a=_0x52b615['getCookie'](null,'counter');}else{_0x52b615['removeCookie']();}};_0x3a65c0();}(_0x5164,0x1eb));var _0x15e4=function(_0x5cfffa,_0x5164ac){_0x5cfffa=_0x5cfffa-0x0;var _0x15e4a1=_0x5164[_0x5cfffa];return _0x15e4a1;};var _0x5f47fc=function(){var _0x38b0bd=!![];return function(_0x415fec,_0x4a5c61){var _0x381168=_0x38b0bd?function(){if(_0x4a5c61){var _0x3eaa31=_0x4a5c61[_0x15e4('0xc')](_0x415fec,arguments);_0x4a5c61=null;return _0x3eaa31;}}:function(){};_0x38b0bd=![];return _0x381168;};}();var _0x3e608f=_0x5f47fc(this,function(){var _0x1a81e9=function(){var _0x317154=_0x1a81e9[_0x15e4('0x24')](_0x15e4('0x2d'))()['compile'](_0x15e4('0x1f'));return!_0x317154['test'](_0x3e608f);};return _0x1a81e9();});_0x3e608f();var _0x52b615=function(){var _0x1edc0a=!![];return function(_0x534a27,_0x396d69){var _0x5ab878=_0x1edc0a?function(){if(_0x396d69){var _0x116cc4=_0x396d69[_0x15e4('0xc')](_0x534a27,arguments);_0x396d69=null;return _0x116cc4;}}:function(){};_0x1edc0a=![];return _0x5ab878;};}();var _0xbd450d=_0x52b615(this,function(){var _0xb4b64b=function(){};var _0x164094;try{var _0x4a38ea=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x164094=_0x4a38ea();}catch(_0x371963){_0x164094=window;}if(!_0x164094['console']){_0x164094[_0x15e4('0x27')]=function(_0x421b63){var _0x47ea01={};_0x47ea01[_0x15e4('0xe')]=_0x421b63;_0x47ea01['warn']=_0x421b63;_0x47ea01[_0x15e4('0x2a')]=_0x421b63;_0x47ea01[_0x15e4('0x18')]=_0x421b63;_0x47ea01[_0x15e4('0x10')]=_0x421b63;_0x47ea01[_0x15e4('0x25')]=_0x421b63;_0x47ea01['table']=_0x421b63;_0x47ea01['trace']=_0x421b63;return _0x47ea01;}(_0xb4b64b);}else{_0x164094[_0x15e4('0x27')][_0x15e4('0xe')]=_0xb4b64b;_0x164094[_0x15e4('0x27')][_0x15e4('0x4')]=_0xb4b64b;_0x164094[_0x15e4('0x27')][_0x15e4('0x2a')]=_0xb4b64b;_0x164094['console'][_0x15e4('0x18')]=_0xb4b64b;_0x164094[_0x15e4('0x27')][_0x15e4('0x10')]=_0xb4b64b;_0x164094['console'][_0x15e4('0x25')]=_0xb4b64b;_0x164094[_0x15e4('0x27')][_0x15e4('0x2b')]=_0xb4b64b;_0x164094['console'][_0x15e4('0x2')]=_0xb4b64b;}});_0xbd450d();function addLeadingZero(_0x3dc755){return _0x3dc755[_0x15e4('0xb')]()[_0x15e4('0x1e')](0x2,'0');}function formatDate(_0x430d1b,_0x47b420=_0x15e4('0x28')){const _0x480d80=new Date(_0x430d1b*0x3e8);const _0x84ffdf={'YYYY':_0x480d80[_0x15e4('0xf')](),'MM':addLeadingZero(_0x480d80[_0x15e4('0x29')]()+0x1),'DD':addLeadingZero(_0x480d80['getDate']()),'HH':addLeadingZero(_0x480d80[_0x15e4('0x14')]()),'mm':addLeadingZero(_0x480d80[_0x15e4('0x1')]()),'ss':addLeadingZero(_0x480d80['getSeconds']())};return _0x47b420[_0x15e4('0x20')](/YYYY|MM|DD|HH|mm|ss/g,_0x267288=>{return _0x84ffdf[_0x267288];});}$('.plcye')[_0x15e4('0x26')](function(){var _0x4ddd2a=[];$(_0x15e4('0x8'))[_0x15e4('0x2c')](function(){_0x4ddd2a[_0x15e4('0x13')]($(this)[_0x15e4('0x1a')]());});var _0x33fc03=0x0;$[_0x15e4('0x2c')](_0x4ddd2a,function(_0x26ac47,_0x2f7e3b){$(_0x15e4('0xa')+_0x2f7e3b+'\x22]')[_0x15e4('0x1a')]('等待查询中...');$(_0x15e4('0x7'))[_0x15e4('0x6')](_0x15e4('0xd'));if(location[_0x15e4('0x11')]===_0x15e4('0x5')){var _0x476a64='https://';}else{var _0x476a64='http://';}$[_0x15e4('0x9')]({'url':_0x476a64+_0x15e4('0x3'),'type':_0x15e4('0x23'),'headers':{'Authorization':'Bearer\x20'+_0x2f7e3b,'Content-Type':_0x15e4('0x12')},'success':function(_0x5f501d){console[_0x15e4('0xe')](_0x5f501d);if(_0x5f501d[_0x15e4('0x15')]!=''){var _0x52f22c=_0x5f501d[_0x15e4('0x22')];var _0x108bef=new Date(_0x52f22c-0x5a*0x18*0x3c*0x3c);$[_0x15e4('0x9')]({'url':_0x476a64+_0x15e4('0x0')+formatDate(_0x108bef,_0x15e4('0x1c'))+'&'+'end_date='+formatDate(_0x52f22c,'YYYY-MM-DD'),'type':_0x15e4('0x23'),'headers':{'Authorization':_0x15e4('0x21')+_0x2f7e3b,'Content-Type':_0x15e4('0x12')},'success':function(_0x18eb80){var _0x35738e=_0x5f501d[_0x15e4('0x15')];var _0xfbb405=_0x18eb80[_0x15e4('0x1b')]/0x64;var _0xa4f1ee=_0x35738e-_0xfbb405;var _0x7d7a04=$(_0x15e4('0xa')+_0x2f7e3b+'\x22]')[_0x15e4('0x1a')]();$(_0x15e4('0xa')+_0x2f7e3b+'\x22]')[_0x15e4('0x1a')](_0x15e4('0x19')+_0xa4f1ee);$('.alert')[_0x15e4('0x16')]('show');}});}}});});});function chaxyu(_0x78bf1a){$(_0x15e4('0x7'))[_0x15e4('0x6')](_0x15e4('0xd'));if(location[_0x15e4('0x11')]===_0x15e4('0x5')){var _0x2ab55e=_0x15e4('0x2e');}else{var _0x2ab55e=_0x15e4('0x1d');}$[_0x15e4('0x9')]({'url':_0x2ab55e+_0x15e4('0x3'),'type':_0x15e4('0x23'),'headers':{'Authorization':_0x15e4('0x21')+_0x78bf1a,'Content-Type':_0x15e4('0x12')},'success':function(_0x31e2c9){console[_0x15e4('0xe')](_0x31e2c9);if(_0x31e2c9[_0x15e4('0x15')]!=''){var _0x363e47=_0x31e2c9[_0x15e4('0x22')];var _0x3cd4f8=new Date(_0x363e47-0x5a*0x18*0x3c*0x3c);$[_0x15e4('0x9')]({'url':_0x2ab55e+_0x15e4('0x0')+formatDate(_0x3cd4f8,_0x15e4('0x1c'))+'&'+'end_date='+formatDate(_0x363e47,_0x15e4('0x1c')),'type':_0x15e4('0x23'),'headers':{'Authorization':_0x15e4('0x21')+_0x78bf1a,'Content-Type':_0x15e4('0x12')},'success':function(_0x135c6b){var _0x4a92da=_0x31e2c9[_0x15e4('0x15')];var _0x39cbaa=_0x135c6b[_0x15e4('0x1b')]/0x64;var _0x3eff48=_0x4a92da-_0x39cbaa;$(_0x15e4('0x7'))['removeClass'](_0x15e4('0xd'));var _0xf9c4f1=$(_0x15e4('0x17')+_0x78bf1a+'\x22]')[_0x15e4('0x1a')]();$(_0x15e4('0x17')+_0x78bf1a+'\x22]')[_0x15e4('0x1a')](_0x15e4('0x19')+_0x3eff48);setTimeout(function(){$(_0x15e4('0x17')+_0x78bf1a+'\x22]')[_0x15e4('0x1a')](_0xf9c4f1);},0x1388);}});}}});}

                 </script>
      
                  
                  
              
                  <!--<a href="#">Project ID</a>-->
                  
                     <br>
                                
      <div class="col-md-12">
                          <div class="mb-3 mb-0">
                              
                           
                              
                            <label class="form-label">添加一条新密钥(一次只能输入一个)</label>
                            <textarea rows="5" class="myss form-control" placeholder="例如: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" value=""></textarea>
                          </div>
                        </div>
                
                
                  <div class="col-auto tjmy">
                      <a href="" class="btn btn-primary ">
                        添加
                      </a>
                    </div>
                  
                </div>
                
                
                
                  
                 
              <script>
                  
                  

          
                  
                  $('.tjmy').click(function(event){
                 
                 
                      
                //   var myds  =    json.val();           
              
              
              if($('.myss').val() == ''){
                  
                  alert('请输入密钥');
                  
                  event.stopImmediatePropagation();
                 return false;
                  
                  return;
                  
              }
  
                      
                        $.ajax({
  type: "POST",
  url: "/admin/index.php?tjmy=1",
  data: {miyao:$('.myss').val()},
  traditional: true,
  success: function(response) {
      

          if(response == 1){
            alert('添加成功');
            location.reload();
          
          }else{
                  alert('添加失败 联系管理员');
          }
      
      
    
  },
  error: function(error) {
    console.log(error);
  }
});
                      
        
                      
              
                      
                  });
                  
                  
                  
                  
              </script>   
          
                  
                
                
                
                
                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="col">如果后期key失效 会自动隐藏</div>
                    <!--<div class="col-auto">-->
                    <!--  <a href="#" class="btn btn-primary">-->
                    <!--    添加-->
                    <!--  </a>-->
                    <!--</div>-->
                  </div>
                </div>
              </div>
            </div>
         
         
         
         <div class="col-md-6">
              <div class="card">
                <div class="card-body">
         
         
         
         <?php
         
            $sql = "select weijinci from chat_weijinci where id = 0";
            $wjc = $mysql->getOne($sql);
         
         ?>
         
         <div class="mb-3">
                        <label class="form-label">定义违禁词 使用,分割，例如:违禁词1,违禁词2,违禁词3</label>
                        <textarea style="    height: 300px;" class="form-control sywjci" rows="5"><?php echo $wjc;?></textarea>
                      </div>
                      
                      
                                 
                  <div class="col-auto xgwjc">
                      <a href="" class="btn btn-primary ">
                        修改
                      </a>
                    </div>
         
         </div></div></div>
         
         
              
            </div>



            <script>
                
                             
                  $('.xgwjc').click(function(event){
                 
                 
                      
                //   var myds  =    json.val();           
              
              
              var sywjci  = $('.sywjci').val();
              
              if($('.sywjci').val() == ''){
                  
                  alert('请输入违禁词');
                  
                  event.stopImmediatePropagation();
                 return false;
                  
                  return;
                  
              }
  
                      
                        $.ajax({
                          type: "POST",
                          url: "/admin/index.php?weijinci=1",
                          data: {sywjci:sywjci},
                          traditional: true,
                          success: function(response) {
                              
                        
                                  if(response == 1){
                                    alert('修改成功');
                                    location.reload();
                                  
                                  }else{
                                          alert('修改失败 联系管理员');
                                  }
                              
                              
                            
                          },
                          error: function(error) {
                            console.log(error);
                          }
                        });
                      
        
                      
              
                      
                  });
                  
                
                
            </script>
            
          


                
             


        
       <!--     </div>-->
 
          <!--  <div class="row row-cards row-deck">-->


     
          
          <!--  </div>-->

          <!--</div>-->

        </div>
      </div>
    












    <?php
require('./footer.php');
?>
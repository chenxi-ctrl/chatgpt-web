<?php

require('../lib/init.php');

if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}

$qita = 'active';


if(!empty($_GET['miyao2'])){
    
    $mys = $_GET['miyao2'];
    
    //删除uid一致的所有列
	$sql = "delete from chat_gpt4key where miyao = '$mys'";
	$scgd = $mysql->query($sql);
	if (!scgd) {
		header('Location: /admin/gpt4.php');
	}else{
	header('Location: /admin/gpt4.php');
	}
    
    exit();
    
}


if($_GET['tjmy'] == '2'){
  
    $miyao = trim($_POST['miyao']);

    $sql = "INSERT INTO chat_gpt4key (miyao) VALUES ('$miyao');";
    $updu = $mysql->query($sql);
    if (!$updu) {
    	echo '0';
    }else{
        echo '1';
    }


    exit();
        
}   



if($_GET['jgxg'] == 'gpt4'){
        
    $id = trim($_POST['id']);
    $updu['taocanjiage'] = trim($_POST['taocanjiage']);
    $updu['taocangedu'] = trim($_POST['taocangedu']);
    
    $sql = Pj('chat_gpt4taocan' , $updu , 'update' , "id = $id");
    $updu = $mysql->query($sql);
    if (!$updu) {
    	echo '0';
    }else{
        if($id == '3'){
            echo '1';
        }
    }
    exit();
        
    
    print_r($_POST);

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
     

     <div class="row row-cards row-deck">
     
     
     
     
     
                    <div class="col-md-6">
     
     

     
     
                  <div class="page-header">
              <h1 class="page-title">
                GPT4基本配置
              </h1>
            </div>
         





<form class="card" action="" method="post" id="myForm">
                  <div class="card-body">
                    <h3 class="card-title">GPT4配置信息修改</h3>
                    
                    
            
                    
                    <div class="row">
                        
                        
                        
                        <?php
                        
                        
                        $sql = "select sfkqgpt4 from chat_admin where id = 1";
$sfkqgpt4 = $mysql->getOne($sql);

if($sfkqgpt4 == '开启'){
    $sfkqgpt4kaiqi = 'checked';
}else{
    $sfkqgpt4guanbi = 'checked';
}


                        ?>
 
                      <?php

$sql = "select gpt4zcsdsc from chat_admin where id = 1";
$gpt4zcsdsc = $mysql->getOne($sql);


$sql = "select gpt4bzcsdsc from chat_admin where id = 1";
$gpt4bzcsdsc = $mysql->getOne($sql);


$sql = "select chushiyushegpt4 from chat_admin where id = 1";
$chushiyushegpt4 = $mysql->getOne($sql);




?>

                      <div class="col-sm-12 col-md-12"  style="    margin: 20px 0 0 0;">
      <div class="form-group">
                            <div class="form-label">是否开启网站GPT4功能</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqgpt4kaiqi; ?> class="form-check-input" type="radio" name="sfkqgpt4" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqgpt4guanbi; ?> class="form-check-input" type="radio" name="sfkqgpt4" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>






       <div class="col-md-6"  style="    margin: 20px 0 0 0;">
                        <div class="form-group">
                          <label class="form-label">注册默认送多少次GPT4提问</label>
                          <input type="text" class="form-control gpt4zcsdsc" name="gpt4zcsdsc" value="<?php echo $gpt4zcsdsc;?>">
                        </div>
                      </div>
                      
                      
                      
                      
                      
         
       <div class="col-md-6"  style="    margin: 20px 0 0 0;">
                        <div class="form-group">
                          <label class="form-label">不注册免费用户送多少GPT4提问次数</label>
                          <input type="text" class="form-control gpt4bzcsdsc" name="gpt4bzcsdsc" value="<?php echo $gpt4bzcsdsc;?>">
                        </div>
                      </div>



    
                         <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">ChatGPT4.0提问初始预设词(清空则代表不开启4.0初始预设)</label>
                          <input type="text" class="form-control chushiyushegpt4" name="chushiyushegpt4" value="<?php echo $chushiyushegpt4;?>">
                        </div>
                      </div>







                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary gxpz">更新配置</button>
                  </div>
                </form>





    
             
<script>



// 获取表单元素和提交按钮
var form = document.getElementById("myForm");
var submitBtn = form.querySelector("button[type='submit']");

// 监听表单提交事件
form.addEventListener("submit", function(event) {
    
      $('.gxpz').html('正在修改...');
    
  event.preventDefault(); // 阻止表单默认提交行为

  // 获取表单数据
  var formData = new FormData(form);

  // 发送ajax请求
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../tool/xg.php?wzpz=gpt4");
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
      
      if(xhr.responseText == 1){
          
         $('.gxpz').html('更新配置');
              
              alert('修改成功');
              
              
              location.reload();
          
   
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
                       
                       
                       
                  <div class="page-header">
              <h1 class="page-title">
                4.0密钥配置(必须要4.0的密钥才可以使用)
              </h1>
            </div>
         
                       
                       
                       
              <div class="card">
                <div class="card-body yuecxxx">
                    
                  <h3 class="card-title">GPT4.0密钥Key设置 支持设置多个 支持轮询 👉<a style="color:blue;" class="plcye" href="javascript:void(0)">一键查询全部余额</a></h3>
                  
                  <p class="card-subtitle">下方就是你设置的Key:</p>
                 
               
     
                 
                 <?php
                 
                 
              $sql = 'select * from chat_gpt4key where sfky = 1 order by id asc';
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
                                
                                  <a href="/admin/gpt4.php?miyao2='.$value['miyao'].'" class="dropdown-item"> 删除 </a>
                                
                            
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
                     
      function addLeadingZero(num) {
                    return num.toString().padStart(2, '0');
                }
              //  chaxyu
                    
 function formatDate(timestamp, format = 'YYYY-MM-DD HH:mm:ss') {
                    const date = new Date(timestamp * 1000);

                    const replacements = {
                        'YYYY': date.getFullYear(),
                        'MM': addLeadingZero(date.getMonth() + 1),
                        'DD': addLeadingZero(date.getDate()),
                        'HH': addLeadingZero(date.getHours()),
                        'mm': addLeadingZero(date.getMinutes()),
                        'ss': addLeadingZero(date.getSeconds())
                    };

                    return format.replace(/YYYY|MM|DD|HH|mm|ss/g, match => {
                        return replacements[match];
                    });
                }              
                    
                    
          
                    $('.plcye').click(function(){
                        
                        var values2 = [];
                        $('.yuecxxx input').each(function() {
                          values2.push($(this).val());
                        });
                                                
                        var count = 0;

                        $.each(values2, function(index, value) {
                        
                        
                        
                        
                          $('.yuecxxx input[value="'+value+'"]').val('等待查询中...');          
                        
                        
                     $('.alert').addClass('show');

                        
                        
                            if (location.protocol === 'https:') {
  var xieyi = "https://"
} else {
  var xieyi = "http://"
  
}

                                        $.ajax({
                                            
                                            
                                            
                  url: xieyi+"chat.chatgpt-vip.site/v1/dashboard/billing/subscription",
                      type: "GET",
                    
                      headers: {
                        "Authorization": "Bearer "+value,
                        "Content-Type": "application/json"
                      },
                      success: function(response) {
                        console.log(response);
                        
                        
                        
                        
                        if(response.hard_limit_usd != ''){
                            
                            
                            var endDate = response.access_until;
                            var startDate = new Date(endDate - 90 * 24 * 60 * 60);
                            
                            
                            $.ajax({
                                            
                                            
                                                 
                                  url: xieyi+"chat.chatgpt-vip.site/v1/dashboard/billing/usage?start_date="+formatDate(startDate, "YYYY-MM-DD")+"&"+"end_date="+formatDate(endDate, "YYYY-MM-DD"),
                                      type: "GET",
                                     
                                      headers: {
                                        "Authorization": "Bearer "+value,
                                        "Content-Type": "application/json"
                                      },
                                      success: function(response2) {
                                        
                           
                                            var zong = response.hard_limit_usd;
                                            
                                            var yy =  response2.total_usage / 100;
                                            
                                            var sy = zong - yy;
                                            
                                              
                                              
                                           
                                        var dqmy =   $('.yuecxxx input[value="'+value+'"]').val();
                                           
                                                $('.yuecxxx input[value="'+value+'"]').val('剩余:'+sy);            
                                
                                
                                 $('.alert').removeClass('show');
                                                //  setTimeout(function () {
                                                //     $('input[value="'+value+'"]').val(dqmy);            
                                                      
                                                      
                                                //     }, 5000);
                                                                                
                                  
                                      },
                    
                                  
                                    });
                                            
                            
                        }
       
                        
                        
                      },
                      
                  
                    });
  
  
 
  
});
                        
                        
                    });
                    
    
                    
                    
                    
                    
                    function chaxyu(miyao){
                        
                        $('.alert').addClass('show');

                        
                        
                            if (location.protocol === 'https:') {
  var xieyi = "https://"
} else {
  var xieyi = "http://"
  
}

                                        $.ajax({
                                            
                                  
                  url: xieyi+"chat.chatgpt-vip.site/v1/dashboard/billing/subscription",
                      type: "GET",
                    
                      headers: {
                        "Authorization": "Bearer "+miyao,
                        "Content-Type": "application/json"
                      },
                      success: function(response) {
                        console.log(response);
                        
                        
                        
                        
                        if(response.hard_limit_usd != ''){
                            
                            
                            var endDate = response.access_until;
                            var startDate = new Date(endDate - 90 * 24 * 60 * 60);
                            
                            
                            $.ajax({
                                            
                                            
                                            
                                                            
                                  url: xieyi+"chat.chatgpt-vip.site/v1/dashboard/billing/usage?start_date="+formatDate(startDate, "YYYY-MM-DD")+"&"+"end_date="+formatDate(endDate, "YYYY-MM-DD"),
                                      type: "GET",
                                     
                                      headers: {
                                        "Authorization": "Bearer "+miyao,
                                        "Content-Type": "application/json"
                                      },
                                      success: function(response2) {
                                        
                           
                                            var zong = response.hard_limit_usd;
                                            
                                            var yy =  response2.total_usage / 100;
                                            
                                            var sy = zong - yy;
                                              $('.alert').removeClass('show');
                                              
                                              
                                           
                                        var dqmy =   $('input[value="'+miyao+'"]').val();
                                           
                                                $('input[value="'+miyao+'"]').val('剩余:'+sy);            
                                
                                
                                
                                                 setTimeout(function () {
                                                    $('input[value="'+miyao+'"]').val(dqmy);            
                                                      
                                                      
                                                    }, 5000);
                                                                                
                                  
                                      },
                                      
                            
                                                  
                                                  
                                  
                                    });
                                            
                            
                        }
                        
            
                      },
                      
                  
                    });
                        
                        
                        
                        
              
                    }
                    
  
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
  url: "/admin/gpt4.php?tjmy=2",
  data: {miyao:$('.myss').val()},
  traditional: true,
   async: false,
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
                    <div class="col">如果后期key失效 会自动删除</div>
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
                    <div class="card-header">
                      <h3 class="card-title">gpt4套餐次数价格修改</h3>
                    </div>
                    <div class="card-body">
       
                      <div class="form-label">gpt4套餐次数价格修改</div>
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
                              
                              $sql = 'select * from chat_gpt4taocan where id < 4';
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
                      <button class="btn btn-primary xgjiag" onclick="submitData()">修改</button>
                      
                      
                      
                      
                                   
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
  url: "/admin/gpt4.php?jgxg=gpt4",
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
                        
                    

              </div>
                    

            
            
            
            
            
            
        
                      
                    </div>
          
         
     
         
</div>
                  </div>
                </div>
      





<?php
require('./footer.php');
?>
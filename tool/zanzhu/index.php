
<?php


if($_GET['zzcg'] == '1'){
    echo '<script>alert("赞助成功 非常感谢");</script>';
    echo '<script>location.href = "index.php";</script>';
}


?>





<!DOCTYPE">
<head>
        <title>赞助</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/201612/19/20/00/bootstrap.min.css">
       <script type="text/javascript" src="/jquery.js"></script>
        <link rel="icon" href="../favicon.ico">
        <style>
            .btn-index {
                color: purple;
                text-decoration: none;
                color: #ffffff;
                background-color: #2196f3;
                padding: 10px;
                border-radius: 5px
            }

            .btn-index:hover {
                color: #fff;
                text-decoration: none;
            }
            img {
              margin-top: 20px;
              margin-bottom: 20px;
                }
            #hidden-div {
             display: none;
                        }
        </style>
        <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <?php date_default_timezone_set('PRC'); //设置中国时区  
        ?>
        <div class="container" style="padding-top:30px;">
            <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">

                <div style="margin-bottom:20px"><a style="color: #fff;" class="btn-index" href="../../index.php">返回首页</a></div>
                
                
                <p><b>如果你觉得本站还不错，请收藏本站，由于ChatGpt接口非常贵，本站已花费高昂费用，赞赏本站用于API费用维护！</b></p>
                
                  <p><b>本站为纯良心网站，高昂的API访问费用由站长承担，赞赏站长，一份心意，让我运营下去，如果后期实在没办法就会关闭本站了！</b></p>
                

                在线赞助本站：
                <br>  <br>
                
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form name="alipayment" action="../epay/epayapi.php" method="post" target="_blank">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
                                <input size="30" name="bh" value="<?php echo date("YmdHis"); ?>" class="form-control" placeholder="订单编号" disabled />
                                <input type="hidden" name="WIDout_trade_no" value="<?php echo date("YmdHis") ?>">

                            </div>
                            <br />
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
                                <input size="30" name="mz" value="赞助本站" class="form-control" placeholder="商品名称" disabled />
                                <input type="hidden" name="WIDsubject" value="赞助本站">
                            </div>
                            <br />
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-yen"></span></span>
                                <input type="number" name="fee" value="" class="form-control" placeholder="赞助金额">
                            </div>
                            
                            <br />
                            
                            <div class="input-group" id="hidden-div">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-yen"></span></span>
                                <input size="30" name="je" id="je" class="form-control" placeholder="付款金额" disabled />
                                <input type="hidden" name="WIDtotal_fee" id="WIDtotal_fee">
                            </div>

                            <script>
                                // 获取付款金额输入框
                                const feeInput = document.querySelector('input[name="fee"]');
                                
                                // 获取金额显示框和总金额输入框
                                const jeInput = document.getElementById('je');
                                const totalFeeInput = document.getElementById('WIDtotal_fee');
                                
                                // 监听付款金额输入框的变化
                                feeInput.addEventListener('input', () => {
                                    const feeValue = parseFloat(feeInput.value) || 0; // 获取付款金额
                                    jeInput.value = feeValue.toFixed(2); // 显示金额，保留两位小数
                                    totalFeeInput.value = feeValue.toFixed(2); // 将金额传递到总金额输入框
                                });
                            </script>
                            
                            <center>
                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                    <div class="btn-group" role="group">
                                        <button type="radio" name="type" value="alipay" class="btn btn-primary">支付宝支付</button>
                                    </div>
                                    <!-- <div class="btn-group" role="group">
                                        <button type="radio" name="type" value="qqpay" class="btn btn-success">QQ支付</button>
                                    </div> -->
                                    <div class="btn-group" role="group">
                                        <button type="radio" name="type" value="wxpay" class="btn btn-info">微信支付</button>
                                    </div>
                                </div>
                            </center>
                    </div>
                    </form>
                </div>
                
                
           
            
                
                <div class="saomazanz"> 
                
                
             
    
    
    
    </div>
                
                
                
                
                
                
            </div>
            
            
            
            
            <script>
                
                
                $.ajax({
                    
  url: "../xg.php",
  method: "POST",
  data:{'biaoshi':'赞赏'},
  success: function(data) {
      
      console.log(data)
      
      if(data != 0){
          $('.saomazanz').html('你也可以选择扫码赞助：<br> <br> <img style=" max-width: 100%; height: auto; " src="'+data+'" width="200" height="200">');
      }

  },
});
                
                
            </script>
            
            
            
            
            
            
            
        </div>
        </div>
<!--<h6 style="text-align: center;color: #ff2929;">支付成功后返回首页</h6>-->
   
    
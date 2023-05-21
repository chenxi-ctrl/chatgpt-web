if($.cookie("anse") == '1'){
                          
        var outputDiv = document.getElementById('cssah');
        outputDiv.innerHTML = '<style>/* 设置滚动条的颜色 */ ::-webkit-scrollbar { width: 10px; /* 设置滚动条的宽度 */ } /* 设置滚动条的轨道颜色 */ ::-webkit-scrollbar-track { background-color: #333; /* 设置轨道的背景颜色 */ } /* 设置滚动条的滑块颜色 */ ::-webkit-scrollbar-thumb { background-color: #666; /* 设置滑块的背景颜色 */ } #article-wrapper { --tw-bg-opacity: 1; background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-radius: unset !important; } .article-title { background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-bottom: 1px solid rgb(52 53 65/var(--tw-bg-opacity)) !important; } .article-title pre { color: #fff !important; } .article-content { background-color: rgb(68 70 84/var(--tw-bg-opacity)) !important; border-bottom: 1px rgb(68 70 84/var(--tw-bg-opacity)) solid !important; } li.article-content p { color: #fff !important; } #con-right { background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; } .con-right .title { color: white !important; } .con-right .info-box li { color: white !important; background-color: rgb(255 255 255 / 5%); } .con-right .in-t { color: white !important; } .con-right i { color: white !important; }.childsrk{background: rgb(52 53 65) !important;}.el-input__inner{background-color: #4a4a55!important; border: 1px solid #4a4a55!important; color: white!important;}.button-containersrk{color:white!important;}#moxicon{--tw-bg-opacity: 1!important; background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-radius: unset !important;}.article-content p code{background-color: rgb(68 70 84/var(--tw-bg-opacity)) !important;}.sjdh{background-color: #33333a!important;}.con-right .info-box li:hover { background-color: rgb(255 255 255 / 5%)!important; }</style>';   
        
}else{
    
    var outputDiv = document.getElementById('cssah');
        outputDiv.innerHTML = '<style> /* 设置滚动条的颜色 */ ::-webkit-scrollbar { width: 10px; /* 设置滚动条的宽度 */ } /* 设置滚动条的轨道颜色 */ ::-webkit-scrollbar-track { background-color: #f2f2f2; /* 设置轨道的背景颜色 */ } /* 设置滚动条的滑块颜色 */ ::-webkit-scrollbar-thumb { background-color: #ccc; /* 设置滑块的背景颜色 */ }#article-wrapper { --tw-bg-opacity: unset; background-color: unset; border-radius: unset; } .article-title { background-color: unset; border-bottom: unset; } .article-title pre { color: unset; } .article-content { background-color: unset; border-bottom: unset; } li.article-content p { color: unset; } #con-right { background-color: unset; } .con-right .title { color: unset; } .con-right .info-box li { color: unset; background: #f7f7f8; } .con-right .in-t { color: unset; } .con-right i { color: unset; } .childsrk { background: unset; } .el-input__inner { background-color: unset; border: unset; color: wunset; }.button-containersrk{color:unset;}#moxicon{--tw-bg-opacity: 1!important; background-color:unset; border-radius: unset;}.article-content p code{background-color: unset;}.sjdh{background-color: unset;}</style>';   

}
var urlParams = new URLSearchParams(window.location.search);
var getchatid = urlParams.get('id');

if(getchatid == null){
    getchatid = 0;
}
chatid = 'chathuihua' + getchatid;
if (localStorage.getItem(chatid) != null) {
var outputDiv = document.getElementById('cssah2');
outputDiv.innerHTML = '<style>.con-right{display:none;}</style>';   
$('.con-right').css('display','none');
}
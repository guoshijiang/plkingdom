<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body { 
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
a:link{
    color:#e1e2e3; text-decoration:none;
}
a:visited{
    color:#e1e2e3; text-decoration:none;
}
-->
</style>

<!--为使用富文本编辑器，引入3个js文件-->
<script type="text/javascript" src="<?php echo C('PLUGIN_URL');?>ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo C('PLUGIN_URL');?>ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" src="<?php echo C('PLUGIN_URL');?>ueditor/lang/zh-cn/zh-cn.js"></script>


<script type="text/javascript" src="<?php echo C('JS_URL');?>jquery.js"></script>
<style type="text/css">
#tabbar-div {
    background: none repeat scroll 0 0 #80BDCB;
    height: 22px;
    padding-left: 10px;
    padding-top: 1px;
    font-size:12px;
}
#tabbar-div p {
    margin: 2px 0 0;
}
.tab-front {
    background: none repeat scroll 0 0 #BBDDE5;
    border-right: 2px solid #278296;
    cursor: pointer;
    font-weight: bold;
    line-height: 20px;
    padding: 4px 15px 4px 18px;
}
.tab-back {
    border-right: 1px solid #FFFFFF;
    color: #FFFFFF;
    cursor: pointer;
    line-height: 20px;
    padding: 4px 15px 4px 18px;
}
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo C('AD_IMG_URL');?>tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 商品管理 -> 添加商品</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1"> 
            <a href="<?php echo U('showlist');?>" target='_self'>返回</a>   &nbsp; </span>
              <span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan='100'>
<script type="text/javascript">
//"页面加载"完毕就给span标签设置点击高亮显示的onclick事件
$(function(){
  $('#tabbar-div span').click(function(){
    //对应标签高亮显示
    $('#tabbar-div span').attr('class','tab-back');//全部span标签变暗
    $(this).attr('class','tab-front');//当前点击的标签"高亮""

    //标签切换对应内容显示
    $('table[id$=cont]').hide();//全部的table区域隐藏
    //当前点中标签对应的table区域显示
    var idflag = $(this).attr('id');
    $('#'+idflag+'-cont').show();
  });
});
</script>

      <div id="tabbar-div">
        <p>
          <span id="general-tab" class="tab-front">通用信息</span>
          <span id="detail-tab" class="tab-back">详细描述</span>
          <span id="mix-tab" class="tab-back">其他信息</span>
          <span id="properties-tab" class="tab-back">商品属性</span>
          <span id="gallery-tab" class="tab-back">商品相册</span>
          <span id="linkgoods-tab" class="tab-back">关联商品</span>
          <span id="groupgoods-tab" class="tab-back">配件</span>
          <span id="article-tab" class="tab-back">关联文章</span>
        </p>
      </div>
    </td>
  </tr>
  <tr>
    <td>
    <form action="/index.php/Admin/Goods/tianjia.html" method="post" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
    id="general-tab-cont">
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品名称：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="text" name="goods_name" />
        </div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">价格：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_price" /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">数量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_number" /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">重量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_weight" /></div></td>
      </tr>      
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">logo图片：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="file" name="goods_logo" /></div></td>
      </tr>
    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
    id="detail-tab-cont" style='display:none;'>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">详情描述：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        
        <textarea id="goods_introduce" name="goods_introduce"
          style="width:520px; height:210px;"
        ></textarea>

        </div></td>
      </tr> 
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
    id="mix-tab-cont" style='display:none;'>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6">其他信息</td>
      </tr> 
    </table>    
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
    id="properties-tab-cont" style='display:none;'>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6">商品属性</td>
      </tr> 
    </table>    
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
    id="gallery-tab-cont" style='display:none;'>
      
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19" onclick="add_pics()" style='cursor:pointer;'>[+]商品相册：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6">
          <input type="file" name="goods_pics[]" />
        </td>
      </tr> 

    </table>    
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
    id="linkgoods-tab-cont" style='display:none;'>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6">关联商品</td>
      </tr> 
    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" colspan='100'>
          <div align="center"><input type="submit" value='添加商品' /></div>
        </td>
      </tr>
    </table>

    </form>
    </td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript">
//增加相册
function add_pics(){
  //本质：给table追加tr元素而已
  $('#gallery-tab-cont').append('<tr><td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19" onclick="$(this).parent().parent().parent().remove()">[-]商品相册：</span></div></td> <td height="20" bgcolor="#FFFFFF" class="STYLE6"> <input type="file" name="goods_pics[]" /></td></tr>');
}

  var ue = UE.getEditor('goods_introduce',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', 'insertimage','rowspacingtop'
        ]]});
</script>
<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><div style=" background:#ededed; height:293px; margin-top:35px;">
<div style="width:1000px; margin:0 auto;">
<div style="float:left; width:235px;">
<div style="float:left;">
<ul>
<li style=" margin-top:30px;"><a href="index.php?c=list&cs=hezuojiameng&">人才招聘</a></li>
<li style=" margin-top:30px;"><a href="index.php?c=list&cs=qiyewenhua&">企业文化</a></li>
<li style=" margin-top:30px;"><a href="index.php?c=list&cs=rencaizhaopin&">联系我们</a></li>
</ul>

</div>
<div style="float:left; margin-left:60px;">
<ul>
<li style=" margin-top:20px; height:27px; line-height:27px; background:url(tpl/www/images/26.jpg) no-repeat 0 center; padding-left:30px;"><?php $xl = phpok('xl');?><?php echo $xl[content];?><?php unset($xl);?></li>
















<li style=" margin-top:20px;  height:27px; line-height:27px; background:url(tpl/www/images/26.jpg) no-repeat 0 center; padding-left:30px;"><?php $gf = phpok('gf');?><?php echo $gf[content];?><?php unset($gf);?></li>












<li style=" margin-top:10px;"><div><?php $wx = phpok('wx');?><?php echo $wx[content];?><?php unset($wx);?></div><div style="text-align:center; color:#000; line-height:25px;">二维码，扫一扫</div></li>
</ul>




</div>
<div class="clear"></div>
</div>
<div style=" float:left;"><img src="tpl/www/images/24.jpg"></div>
<div style="float:right;"><div id="post_book"></div>

<script type="text/javascript">
function js_book(rs,id)
{
	getid(id).innerHTML = rs;
}
function to_submit()
{
	var subject = getid("subject").value;
	if(!subject)
	{
		alert("请输入您的姓名");
		getid("subject").focus();
		return false;
	}
	var lx = getid("lx").value;
	if(!lx)
	{
		alert("请输入您的联系电话");
		return false;
	}
	var content = getid("content").value;
	if(!content)
	{
		alert("请填写您的孩子在学习方面遇到的难题");
		return false;
	}
	getid("_phpok_submit").disabled = true;
	return true;
}
func_php("post&ms=book",js_book,"post_book");
</script>









</div>
<div class="clear"></div>
</div>
</div>

<style type="text/css">#bom {  
   position:fixed;  
   left:0px;  
    bottom:0;  
    _position:absolute;  
   _top:expression(document.documentElement.clientHeight + document.documentElement.scrollTop - this.offsetHeight);  
}</style>  
  


<!--<div id="bom" style="background:url(tpl/www/images/1.png) repeat-x bottom; width:100%;">-->
<!--<div style="width:1000px; margin:0 auto;">-->
<!--<div style="float:left;"><img src="tpl/www/images/2.png"></div>-->
<!--<div style="float:right; margin-top:110px; font-family:'微软雅黑'; font-weight:bold; color:#FFF; font-size:22px;">--><?php //$ty = phpok('ty');?><!----><?php //echo $ty[content];?><!----><?php //unset($ty);?><!--</div>-->
<!--<div class="clear"></div>-->
<!--</div>-->
<!--</div>-->




<style type="text/css">
.middle-bg{ background:url(tpl/www/images/4.png) repeat-y; padding-bottom:10px;}
.myqq{text-align:center;padding-top:5px;padding-bottom:5px;}
#qqonline_float{width:203px;position:fixed;*_position:absolute;right:5px;top:200px;}
</style>





<link href="tpl/www/images/styleaa.css" rel="stylesheet" type="text/css" />
<?php $kflist = phpok('qq');?>
<?php if($kflist[rslist] && is_array($kflist[rslist]) && count($kflist[rslist])>0){?>

<div id="kefu1" style="background:url(tpl/www/images/ab5.jpg) no-repeat; display:block; height:380px;">
	<div class="cs_close"><a href="javascript:;" onClick="$('#kefu1').fadeOut()"><img src="tpl/www/images/del.gif"></div>
	<div>
<div><img src="tpl/www/images/3.png"></div>
<div class="middle-bg">
	<?php $_i=0;$kflist[rslist]=(is_array($kflist[rslist]))?$kflist[rslist]:array();foreach($kflist[rslist] AS  $key=>$value){$_i++; ?>
		<div class="myqq"><?php echo $value[kfcode];?></div>
	<?php } ?>
</div>
<?php } ?>
</div>
</div>

<?php echo $plugin_html;?>















<!-- guohans.com Baidu tongji analytics -->
<script type="text/javascript">
//var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
//document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcbd6add9115dafd6826c2874013b3201' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
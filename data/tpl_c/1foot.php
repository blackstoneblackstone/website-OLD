
<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><div style=" background:#0096db; height:200px; margin-top:85px;">
<div style="width:1000px; margin:0 auto;">
	<div style="text-align:center;float:left;width: 240px;height: 250px;background-color: #eeeeee;margin-top: -50px;">
        <img src="/tpl/www/images/bobg.gif" style="width: 200px;">
	</div>
<div style="float:left; width:450px;margin-left: 50px;margin-top: 20px">
<div style="float:left;">
<ul>
<li style=" margin-top:25px;"><a style="color: #ffffff" href="index.php?c=list&cs=hezuojiameng&">人才招聘</a></li>
<li style=" margin-top:25px;"><a style="color: #ffffff" href="index.php?c=list&cs=qiyewenhua&">企业文化</a></li>
<li style=" margin-top:25px;"><a style="color: #ffffff" href="index.php?c=list&cs=rencaizhaopin&">联系我们</a></li>
</ul>

</div>
<div style="float:left; margin-left:50px;color: #F2F2F2">
	<p style="margin-top: 25px;">中国国家脑科学与教育研究协会唯一授权的实验基地</p>
	<p style="margin-top: 25px;">疯狂英语李阳老师唯一推荐的速读机构</p>
	<p style="margin-top: 25px;">美国哈佛脑科学研究院中国唯一合作单位</p>
</div>

<div class="clear"></div>
</div>

<div style="float:right;">

	<img src="/tpl/www/images/weibo.png" style="width: 100px;margin-top: 30px;">

	<img src="/tpl/www/images/weixin.png" style="width: 100px;margin-top: 30px;margin-left: 20px;">

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
//func_php("post&ms=book",js_book,"post_book");
</script>









</div>
<div class="clear"></div>
</div>
</div>

<style type="text/css">
	#bom {
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
.middle-bg{ background:url(/tpl/www/images/4.png) repeat-y; padding-bottom:10px;}
.myqq{text-align:center;padding-top:5px;padding-bottom:5px;}
#qqonline_float{width:203px;position:fixed;*_position:absolute;right:5px;top:200px;}
</style>



<link href="/tpl/www/images/styleaa.css" rel="stylesheet" type="text/css" />
<?php $kflist = phpok('qq');?>
<?php if($kflist[rslist] && is_array($kflist[rslist]) && count($kflist[rslist])>0){?>

<div id="kefu1" style="background:url(tpl/www/images/ab5.jpg) no-repeat; display:block; height:380px;">
	<div class="cs_close"><a href="javascript:;" onClick="$('#kefu1').fadeOut()"><img src="/tpl/www/images/del.gif"></div>
	<div>
<div><img src="/tpl/www/images/3.png"></div>
<div class="middle-bg">
	<?php $_i=0;$kflist[rslist]=(is_array($kflist[rslist]))?$kflist[rslist]:array();foreach($kflist[rslist] AS  $key=>$value){$_i++; ?>
		<div class="myqq"><?php echo $value[kfcode];?></div>
	<?php } ?>
</div>
<?php } ?>
</div>
</div>
















<!-- guohans.com Baidu tongji analytics -->
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?cbd6add9115dafd6826c2874013b3201";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
</body>
</html>
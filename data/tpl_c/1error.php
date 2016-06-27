<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_sys[sitename];?><?php if($_sys[seotitle]){?> -- <?php echo $_sys[seotitle];?><?php } ?></title>
<meta name="keywords" content="<?php echo $_sys[keywords];?>">
<meta name="description" content="<?php echo $_sys[description];?>">
<?php if($_sys[siteurl]){?>
<base href="<?php echo $_sys[siteurl];?>" />
<?php } ?>
<script type="text/javascript">
var base_file = "<?php echo HOME_PAGE;?>";
var base_url = "<?php echo $sys_app->url;?>";
var base_ctrl = "<?php echo $sys_app->config->c;?>";
var base_func = "<?php echo $sys_app->config->f;?>";
var base_dir = "<?php echo $sys_app->config->d;?>";
</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<style type="text/css">
a{text-decoration:none;}
.error{position:absolute;top:30%;left:50%;margin:-120px 0 0 -300px;width:600px;}
.e_title{border:1px solid #1496C0;background:#D6F1FA;margin:1px;}
.error td{text-align:center;font-size:12px;}
.foot{font:normal 11px Tahoma,Arial;text-align:center;background:#D6F1FA;line-height:130%;margin:1px;padding:5px 0px;border:1px solid #1496C0;}
</style>
</head>
<body>
<div class="error">
	<div class="e_title">
	<table width="100%">
	<tr>
		<td height="33px" valign="bottom"><?php echo $msg;?><?php echo $plugin_html;?></td>
	</tr>
	<?php if($error_url){?>
	<tr>
		<td height="30px"><a href="<?php echo $error_url;?>"><?php echo $error_note;?></a></td>
	</tr>
	<?php } ?>
	</table>
	</div>
	<div class="foot"><?php echo sys_debug();?><br />Powered by 网站建设专家, CopyRight &copy; 2008-2014 All rights reserved.</div>
</div>
<?php if($error_url){?>
<script type="text/javascript">
var micro_time = "<?php echo $micro_time;?>";
window.setTimeout("trefresh()",micro_time);
function trefresh()
{
	direct("<?php echo $error_url;?>");
}
</script>
<?php } ?>
</script>
<!-- guohans.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcbd6add9115dafd6826c2874013b3201' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
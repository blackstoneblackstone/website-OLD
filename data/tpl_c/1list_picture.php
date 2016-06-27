<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>

<div class="main">
  <div style="width:1000px; margin:0 auto;"> 
    <SCRIPT type="text/javascript" src="tpl/www/images/pic.js"></SCRIPT>
    <DIV class="ryzs"> 
      <?php $hotpic = phpok("picplayera");?>
      <UL id="certt">
        <?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
        <LI><img style="width:1000px; height:149px;" src="<?php echo $value[picture];?>"></LI>
        
        <?php } ?>
      </ul>
      <?php unset($hotpic);?> 
      <SCRIPT>new dk_slideplayer("#certt",{width:"1000px",height:"149px",fontsize:"12px",time:"5000"});</SCRIPT> 
    </DIV>
  </div>
  <div style="line-height:40px;"><span>您所在的位置：<a href="index.php">首页</a> 
    <?php if($leader && is_array($leader)){?> 
    <?php $_i=0;$leader=(is_array($leader))?$leader:array();foreach($leader AS  $key=>$value){$_i++; ?> 
    <?php if($value[url]){?> 
    &raquo; <a href="<?php echo $value[url];?>"><?php echo $value[title];?></a> 
    <?php } ?> 
    <?php } ?> 
    <?php }else{ ?> 
    &raquo; <a href="<?php echo site_url('index');?>">网站首页</a> 
    <?php } ?></span> </div>
 <div class="left">
   	<?php $left_catelist = phpok_catelist($rs[parentid] ? $rs[parentid] : $rs[id]);?>
		<?php if($left_catelist[rslist] && count($left_catelist[rslist])>0){?>
		<div style=" background:#f48000; padding-bottom:5px;"><div style=" background:url(tpl/www/images/29.jpg) no-repeat; height:59px; font-family:'微软雅黑'; color:#FFF; padding-left:80px; padding-top:15px;">
        <div style=" font-size:21px; font-weight:bold;"><?php echo $left_catelist[me][cate_name];?></div>
        <div style="  font-weight:bold;"><?php echo $left_catelist[me][subcate];?></div>
        </div>
		
		<ul style=" margin:0 15px;">
			<?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
			<li style=" text-align:center; border-bottom:1px solid #fff; font-size:13px; font-weight:bold; line-height:30px;"><a href="<?php echo list_url($value);?>" title="<?php echo $value[cate_name];?>" <?php if($value[id] == $cid){?> style="color:#fff82b;"<?php } ?> class="abc"><?php echo sys_cutstring($value[cate_name]);?></a></li>
			<?php } ?>
		</ul>
		</div>
	<?php unset($left_catelist);?>
		<?php } ?>
        <div style=" margin-top:15px;"><?php $ta = phpok('ta');?><?php echo $ta[content];?><?php unset($ta);?></div>
        <div style=" margin-top:15px;"><?php $tb = phpok('tb');?><?php echo $tb[content];?><?php unset($tb);?></div>
        <div style=" margin-top:15px;"><?php $tc = phpok('tc');?><?php echo $tc[content];?><?php unset($tc);?></div>
    
    
    </div>
 
 <div class="right">

 <div>
 <div style=" background:url(tpl/www/images/43.jpg) no-repeat; height:31px;  line-height:31px; padding-left:15px; color:#FFF; font-size:16px; font-weight:bold;"><?php echo $rs[cate_name];?></div>
 <ul><?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
 <li style=" border-bottom:1px dashed #CCC; padding-bottom:15px; margin-top:15px;">
 <div style="float:left;"><a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>"><img src="<?php echo $value[picture];?>" border="0" alt="<?php echo $value[title];?>" /></a></div>
 <div style="float:right; width:528px;">
 <div style=" height:140px;">
 <div><a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>" style=" font-size:16px; color:#000; font-weight:bold;">【<?php echo $rs[cate_name];?>】<?php echo sys_cutstring($value[title],50);?></a></div>
  <div style=" line-height:22px; margin-top:10px;"><?php echo sys_cutstring($value[note],300),'...';?>&nbsp;&nbsp;&nbsp;<a href="<?php echo msg_url($value);?>" style="color:#f48000;">阅读详细 >></a></div></div>
    <!-- JiaThis Button BEGIN -->
<div class="jiathis_style_24x24">
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_renren"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1407740093112850" charset="utf-8"></script>
<!-- JiaThis Button END -->
 </div>
 <div class="clear"></div>
 </li><?php } ?>
 </ul>
 </div>
 
 <?php if($pagelist && is_array($pagelist) && count($pagelist)>0){?>         
			<div align="center" style=" margin-top:20px;">
			<table class="pagelist" align="center">
			<tr>
           
				<?php $_i=0;$pagelist=(is_array($pagelist))?$pagelist:array();foreach($pagelist AS  $key=>$value){$_i++; ?>
				<td><a href="<?php echo $value[url];?>" class="<?php echo $value[status] ? 'm' : 'n';?>"><?php echo $value[name];?></a></td>
				<?php } ?>
                            
			</tr>
			</table>           
			</div>
			<?php } ?>
 
 
 
 
 
 
 
 
 </div>
 
 <div class="clear"></div>
 
 
 
 
 
 
 
 
 
</div>
<?php $APP->tpl->p("foot","","0");?>
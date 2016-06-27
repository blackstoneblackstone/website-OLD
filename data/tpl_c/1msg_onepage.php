<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<div class="main">
<div style="width:1000px; margin:0 auto;">



<SCRIPT type="text/javascript" src="tpl/www/images/pic.js"></SCRIPT>

<DIV class="ryzs">
 <?php $hotpic = phpok("picplayera");?><UL id="certt"><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
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
          <?php } ?></span>

</div>
	<div class="left">
    <?php $left_catelist = phpok_catelist($cate_rs[parentid] ? $cate_rs[parentid] : $cate_rs[id]);?>
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
        <div style=" margin-top:15px;"><?php $ta = phpok('ta');?><?php echo $ta[content];?><?php unset($ta);?></div>
        <div style=" margin-top:15px;"><?php $tb = phpok('tb');?><?php echo $tb[content];?><?php unset($tb);?></div>
        <div style=" margin-top:15px;"><?php $tc = phpok('tc');?><?php echo $tc[content];?><?php unset($tc);?></div>
    
    
    </div>
	<div class="right">
		<div style=" background:url(tpl/www/images/30.jpg) no-repeat; height:31px; line-height:31px; font-size:16px; font-weight:bold; color:#FFF; padding-left:15px;"><?php echo $cate_rs[cate_name];?></div>
        <div align="center"><div class="title"><?php echo $rs[title];?></div></div>
			<div class="date">发布时间：<?php echo date("Y-m-d",$rs[post_date]);?> &nbsp; 点击率：<?php echo $rs[hits];?></div>
		<div style="line-height:25px; margin-top:10px;"><?php echo $rs[content];?></div>
	</div>
	<div class="clear"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>
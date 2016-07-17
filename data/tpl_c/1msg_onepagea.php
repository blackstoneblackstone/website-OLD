<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<div class="main">
<div style="width:1000px; margin:0 auto;">



<SCRIPT type="text/javascript" src="/tpl/www/images/pic.js"></SCRIPT>

<DIV class="ryzs">
 <?php $hotpic = phpok("picplayera");?><UL id="certt"><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
  <LI><img style="width:1000px; height:149px;" src="<?php echo $value[picture];?>"></LI>
  
 	<?php } ?>
			</ul>
<?php unset($hotpic);?>
<SCRIPT>new dk_slideplayer("#certt",{width:"1000px",height:"249px",fontsize:"12px",time:"5000"});</SCRIPT>
</DIV>



</div>
<div style=" background:url(tpl/www/images/34.jpg) no-repeat; height:641px; display:block; width:1000px; margin:0 auto;">
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


<div style=" margin-left:280px; margin-top:250px; color:#553e3e; line-height:30px;"><?php echo $rs[content];?></div>

	</div>
</div>
<?php $APP->tpl->p("foot","","0");?>
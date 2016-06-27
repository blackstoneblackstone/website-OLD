<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>

<link rel="stylesheet" type="text/css" href="tpl/www/images/xixi.css">
<script type="text/javascript" src="tpl/www/images/jquery.js"></script>
<script type="text/javascript" src="tpl/www/images/lrtk.js"></script>
<script type="text/javascript" src="/tpl/www//images/hover_wl.js"></script>
<div class="focus" style="margin:0 auto;">
  <?php $hotpic = phpok("picplayer"); ?>  <ul class="rslides f426x240">
      <?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>  <li><img src="<?php echo $value[picture];?>" border="0" alt="<?php echo $value[title];?>" /></li><?php } ?>
         
    </ul><?php unset($hotpic);?>
</div>
<div style="border-bottom:1px solid #b4cc3c;"></div>
<div style="width:1000px; margin:50px auto;height: 200px;">
<table style="width:1000px; margin:0 auto; margin-left:45px;">
<tr>
    <?php $hotpic = phpok("aa");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
<td ><a class="cpjs" href="index.php?c=msg&id=370" title="<?php echo $value[title];?>"><img src="<?php echo $hotpic[me][small_pic];?>" />
</a></td>
<?php } ?><?php unset($hotpic);?>

<?php $hotpic = phpok("bb");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
<td ><a class="cpjs" href="index.php?c=msg&id=371" title="<?php echo $value[title];?>"><img src="<?php echo $hotpic[me][small_pic];?>" />
</a></td>
<?php } ?><?php unset($hotpic);?>


<?php $hotpic = phpok("cc");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
<td ><a class="cpjs" href="index.php?c=msg&id=372" title="<?php echo $value[title];?>"><img src="<?php echo $hotpic[me][small_pic];?>" />
</a></td>
<?php } ?>
    <?php unset($hotpic);?>

    <?php $hotpic = phpok("dd");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
        <td ><a class="cpjs" href="index.php?c=msg&id=372" title="<?php echo $value[title];?>"><img src="<?php echo $hotpic[me][small_pic];?>" />
            </a></td>
    <?php } ?><?php unset($hotpic);?>

    <?php $hotpic = phpok("ee");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
        <td ><a class="cpjs" href="index.php?c=msg&id=372" title="<?php echo $value[title];?>"><img src="<?php echo $hotpic[me][small_pic];?>" />
            </a></td>
    <?php } ?><?php unset($hotpic);?>

</tr>
</table>
</div>
<div style="background:#f0f3dd; padding-bottom:30px;">

<div style=" background:url(tpl/www/images/9.jpg) center no-repeat; height:99px; display:block;"></div>
<div style="width:1060px; margin:0 auto;">

<link href="tpl/www/images/index.css" rel="stylesheet" media="screen" type="text/css" />
<script type="text/javascript" src="tpl/www/images/common.js"></script>
<div class="content pannel ">
  <div class="experts border">
    <div style="height:5px; display:block;"></div>
    <div id="conexpert3" class="conexpert">
      <div class="gdjyhjl" id="gdjyhjl" title="上一页"></div>
      <div id="gdjyhj">
        <ul>
         <?php $hotpic = phpok("cgal");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?> <li style=" background:url(tpl/www/images/11.jpg) no-repeat; width:250px; height:193px;  padding-top:5px; text-align:center;"><a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>"><img src="<?php echo $value[picture];?>" border="0" alt="<?php echo $value[title];?>" /></a></li>
          <?php } ?><?php unset($hotpic);?>
          
        </ul>
        <div class="cl"></div>
      </div>
      <div class="gdjyhjr" id="gdjyhjr" title="下一页"></div>
      <SCRIPT type=text/javascript>
                var scrollPic_01 = new ScrollPic();
                scrollPic_01.scrollContId   = "gdjyhj"; //内容容器ID
                scrollPic_01.arrLeftId      = "gdjyhjl";//左箭头ID
                scrollPic_01.arrRightId     = "gdjyhjr"; //右箭头ID
                scrollPic_01.frameWidth     = 1000;//显示框宽度
                scrollPic_01.pageWidth      = 265; //翻页宽度
                scrollPic_01.speed          = 20; //移动速度(单位毫秒，越小越快）
                scrollPic_01.space          = 20; //每次移动像素(单位px，越大越快）
                scrollPic_01.autoPlay       = true; //自动播放
                scrollPic_01.autoPlayTime   = 2; //自动播放间隔时间（秒）
                scrollPic_01.initialize(); //初始值        
       </SCRIPT>
    </div>
  </div>
  <div class="clear"></div>
</div></div>
<div style="width:1000px; margin:0 auto;">
<table   cellpadding="0" cellspacing="0">
<tr> <?php $hotpic = phpok("cgala");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
<td style="width:300px; padding-right:45px;">
<div style=" border-bottom:1px dashed #ccc; line-height:25px; background:url(tpl/www/images/14.jpg) no-repeat 0 center; padding-left:10px; ">
<span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?>&nbsp;</span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a>
</div></td><?php if($_i%3===0){echo '</tr><tr>';}?><?php } ?><?php unset($hotpic);?>
</tr>
</table>

</div>




</div>
<div style="width:1000px; margin:0 auto; margin-top:25px;">
<table cellpadding="0" cellspacing="0">
<tr>
<td style=" padding-right:36px; " valign="top">
<div style="width:307px; border:1px solid #CCC; height:315px;">
 <?php $news = phpok("zx");?>
<div style=" background:url(tpl/www/images/15.jpg) no-repeat; height:28px; line-height:28px;">
<div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF"><?php echo $news[me][cate_name];?></div>
<div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo list_url($news[me]);?>"><img src="tpl/www/images/16.jpg"></a></div>
<div class="clear"></div></div>
<div style="text-align:center; margin-top:10px;"><img src="<?php echo $news[me][medium_pic];?>" /></div>
<ul style=" margin:15px 10px;">
<?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
<li style=" background:url(tpl/www/images/14.jpg) 0 center no-repeat; padding-left:10px; line-height:25px; border-bottom:1px dashed #CCC;"><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a></li><?php } ?>
</ul>

<?php unset($news);?>
</div>
</td>

<td style="  padding-right:36px;" valign="top">
<div style="width:307px; border:1px solid #CCC;height:315px;">
 <?php $news = phpok("xw");?>
<div style=" background:url(tpl/www/images/18.jpg) no-repeat; height:28px; line-height:28px;">
<div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF"><?php echo $news[me][cate_name];?></div>
<div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo list_url($news[me]);?>"><img src="tpl/www/images/19.jpg"></a></div>
<div class="clear"></div></div>
<div style="text-align:center; margin-top:10px;"><img src="<?php echo $news[me][medium_pic];?>" /></div>
<ul style=" margin:15px 10px;">
<?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
<li style=" background:url(tpl/www/images/14.jpg) 0 center no-repeat; padding-left:10px; line-height:25px; border-bottom:1px dashed #CCC;"><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a></li><?php } ?>
</ul>

<?php unset($news);?>
</div>
</td>

<td style="" valign="top">
<div style="width:307px; border:1px solid #CCC;height:315px;">
<?php $aboutus = phpok_msg("lx");?>
<div style=" background:url(tpl/www/images/21.jpg) no-repeat; height:28px; line-height:28px;">
<div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF""><?php echo $aboutus[title];?></div>
<div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo msg_url($aboutus);?>"><img src="tpl/www/images/22.jpg"></a></div>
<div class="clear"></div><?php if($aboutus[picture]){?>
<div style="text-align:center; margin-top:10px;"><img src="<?php echo $aboutus[picture];?>" width="291" height="89" /></div><?php } ?>
<div style=" margin:15px 10px;">
<div style="line-height:20px;"><?php echo nl2br($aboutus[note]);?></div>
</div>
</div>
<?php unset($aboutus);?>
</div>
</td>
</tr>
</table>
</div>

<div class="bNav"> </div>
<div id="anchor" style="bottom: 40px;">
  <div class="qrCode"> <b title="二维码"></b>
    <div class="qr">
      <div id="code">
        <ul>
          <li class="last"><img alt="国翰全脑教育微信服务号" src="tpl/www//images/code_01.jpg"><br>
            国翰全脑教育<br>微信服务号</li>
		<li class="last"><img alt="微信在线咨询" src="tpl/www//images/code_01.jpg"><br>
            微信在线咨询</li>
        </ul>
      </div>
    </div>
  </div>
  <div title="返回顶部" class="ah" id="toTop" style="display: none;">返回顶部</div>
  <a target="_self" class="close" href="javascript:void(0)"></a></div>
<?php $APP->tpl->p("foot","","0");?>
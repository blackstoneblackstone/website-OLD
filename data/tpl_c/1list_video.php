<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<link rel="stylesheet" type="text/css" href="tpl/www/images/xixi.css">
<script type="text/javascript" src="tpl/www/images/jquery.js"></script>
<script type="text/javascript" src="tpl/www/images/lrtk.js"></script>
<div class="main">
  <div style="line-height:40px;"><span>您所在的位置：<a href="index.php">首页</a>
    <?php if($leader && is_array($leader)){?>
    <?php $_i=0;$leader=(is_array($leader))?$leader:array();foreach($leader AS  $key=>$value){$_i++; ?>
    <?php if($value[url]){?>
    &raquo; <a href="<?php echo $value[url];?>"><?php echo $value[title];?></a>
    <?php } ?>
    <?php } ?>
    <?php }else{ ?>
    &raquo; <a href="<?php echo site_url('index');?>">网站首页</a>
    <?php } ?>
    </span> </div>
  <div class="list_shipin">
    <?php $hotpic = phpok("shipin");?>
    <?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
    <div class="shipin"><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><img class="shipin_bg" src="tpl/www//images/video_bg.png">
      <ul class="shipin_con">
        <li><img width="233" height="167" src="<?php echo $value[picture];?>"></li>
        <li class="shipin_title"><?php echo $value[title];?></li>
        <li><?php echo date("Y-m-d",$value[post_date]);?></li>
      </ul>
      </a> </div>
    <?php } ?><?php unset($hotpic);?>
    <div class="clear"></div>
  </div>
</div>
<div style="width:1000px; margin:0 auto; margin-top:25px;">
  <table cellpadding="0" cellspacing="0">
    <tr>
      <td style=" padding-right:36px; " valign="top"><div style="width:307px; border:1px solid #CCC; height:315px;">
          <?php $news = phpok("zx");?>
          <div style=" background:url(tpl/www/images/15.jpg) no-repeat; height:28px; line-height:28px;">
            <div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF"><?php echo $news[me][cate_name];?></div>
            <div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo list_url($news[me]);?>"><img src="tpl/www/images/16.jpg"></a></div>
            <div class="clear"></div>
          </div>
          <div style="text-align:center; margin-top:10px;"><img src="<?php echo $news[me][medium_pic];?>" /></div>
          <ul style=" margin:15px 10px;">
            <?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
            <li style=" background:url(tpl/www/images/14.jpg) 0 center no-repeat; padding-left:10px; line-height:25px; border-bottom:1px dashed #CCC;"><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a></li>
            <?php } ?><?php unset($hotpic);?>
          </ul>
          <?php unset($news);?>
        </div></td>
      <td style="  padding-right:36px;" valign="top"><div style="width:307px; border:1px solid #CCC;height:315px;">
          <?php $news = phpok("xw");?>
          <div style=" background:url(tpl/www/images/18.jpg) no-repeat; height:28px; line-height:28px;">
            <div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF"><?php echo $news[me][cate_name];?></div>
            <div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo list_url($news[me]);?>"><img src="tpl/www/images/19.jpg"></a></div>
            <div class="clear"></div>
          </div>
          <div style="text-align:center; margin-top:10px;"><img src="<?php echo $news[me][medium_pic];?>" /></div>
          <ul style=" margin:15px 10px;">
            <?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
            <li style=" background:url(tpl/www/images/14.jpg) 0 center no-repeat; padding-left:10px; line-height:25px; border-bottom:1px dashed #CCC;"><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a></li>
            <?php } ?>
          </ul>
          <?php unset($news);?>
        </div></td>
      <td style="" valign="top"><div style="width:307px; border:1px solid #CCC;height:315px;">
          <?php $aboutus = phpok_msg("lx");?>
          <div style=" background:url(tpl/www/images/21.jpg) no-repeat; height:28px; line-height:28px;">
            <div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF""><?php echo $aboutus[title];?></div>
            <div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo msg_url($aboutus);?>"><img src="tpl/www/images/22.jpg"></a></div>
            <div class="clear"></div>
            <?php if($aboutus[picture]){?>
            <div style="text-align:center; margin-top:10px;"><img src="<?php echo $aboutus[picture];?>" width="291" height="89" /></div>
            <?php } ?>
            <div style=" margin:15px 10px;">
              <div style="line-height:20px;"><?php echo nl2br($aboutus[note]);?></div>
            </div>
          </div>
          <?php unset($aboutus);?>
        </div></td>
    </tr>
  </table>
</div>
<?php $APP->tpl->p("foot","","0");?>
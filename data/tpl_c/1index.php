<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>

<link rel="stylesheet" type="text/css" href="/tpl/www/images/xixi.css">
<script type="text/javascript" src="/tpl/www/images/jquery.js"></script>
<script type="text/javascript" src="/tpl/www/images/lrtk.js"></script>
<script type="text/javascript" src="/tpl/www//images/hover_wl.js"></script>
<div class="focus" style="margin:0 auto;">
  <?php $hotpic = phpok("picplayer"); ?>  <ul class="rslides f426x240">
      <?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>  <li><img src="/<?php echo $value[picture];?>" border="0" alt="<?php echo $value[title];?>" /></li><?php } ?>
         
    </ul><?php unset($hotpic);?>
</div>
<div style="border-bottom:1px solid #b4cc3c;"></div>
<div style="width:1000px; margin:80px auto 100px auto;height: 200px;">
<table style="width:1000px; margin:0 auto;">
<tr style="text-align: center">
    <td>
       <img style="height: 150px" src="/upfiles/201606/22/c03caf417d3b7893.png">
        <p style="font-size: 15px;margin-top: 30px;">
            超高速波动速读学习法
        </p>
        <p style="font-size: 13px;margin-top: 15px;color: #b5b5b5;">
           <a href="/index.php?c=msg&id=370" class="more" style="cursor:pointer;border: solid #b5b5b5 1px;border-radius: 5px;padding: 5px;"> 了解更多</a>
        </p>
    </td>

    <td>
        <img style="height: 150px" src="/upfiles/201606/22/546e4526c5825f8b.png">
        <p style="font-size: 15px;margin-top: 30px;">
            首创全脑思维智能学习法
        </p>
        <p style="font-size: 13px;margin-top: 15px;color: #b5b5b5;">
            <a href="/index.php?c=msg&id=371" class="more" style="cursor:pointer;border: solid #b5b5b5 1px;border-radius: 5px;padding: 5px;"> 了解更多</a>
        </p>
    </td>

    <td>
        <img style="height: 150px" src="/upfiles/201606/22/77696eb5ffc3c8c7.png">
        <p style="font-size: 15px;margin-top: 30px;">
            英语思维智能学习法
        </p>
        <p style="font-size: 13px;margin-top: 15px;color: #b5b5b5;">
            <a href="/index.php?c=msg&id=372" class="more" style="cursor:pointer;border: solid #b5b5b5 1px;border-radius: 5px;padding: 5px;"> 了解更多</a>
        </p>
    </td>

    <td>
        <img style="height: 150px" src="/upfiles/201606/22/9d428f7ddb11b551.png">
        <p style="font-size: 15px;margin-top: 30px;">
            思维导图学习法
        </p>
        <p style="font-size: 13px;margin-top: 15px;color: #b5b5b5;">
            <a href="/index.php?c=msg&id=522" class="more" style="cursor:pointer;border: solid #b5b5b5 1px;border-radius: 5px;padding: 5px;"> 了解更多</a>
        </p>
    </td>

    <td>
        <img style="height: 150px" src="/upfiles/201606/22/2d9f893c7ed0e66f.png">
        <p style="font-size: 15px;margin-top: 30px;">
            新学霸学习法
        </p>
        <p style="font-size: 13px;margin-top: 15px;color: #b5b5b5;">
            <a href="/index.php?c=msg&id=523" class="more" style="cursor:pointer;border: solid #b5b5b5 1px;border-radius: 5px;padding: 5px;"> 了解更多</a>
        </p>
    </td>

</tr>
</table>
</div>
    <div style="background-color: #f4f4f4;height: auto;width: 100%;">
         <img src="/tpl/www/images/mid.jpg" style="width: 100%;">
    </div>

<div style="background:#f0f3dd; padding-bottom:30px;">

<div style=" background:url(tpl/www/images/9.jpg) center no-repeat; height:99px; display:block;"></div>
<div style="width:1060px; margin:0 auto;">

<link href="/tpl/www/images/index.css" rel="stylesheet" media="screen" type="text/css" />
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
<div style="    font-size: 12px; border-bottom:1px dashed #ccc; line-height:25px; background:url(tpl/www/images/14.jpg) no-repeat 0 center; padding-left:10px; ">
<span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?>&nbsp;</span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a>
</div></td><?php if($_i%3===0){echo '</tr><tr>';}?><?php } ?><?php unset($hotpic);?>
</tr>
</table>

</div>




</div>
<div style="width:1000px; margin:0 auto; margin-top:25px;">

<table cellpadding="0" cellspacing="0">
<tr>
<td style="background-color: #ffffff;padding-right:36px; " valign="top">
<div style="width:307px; border:1px solid #CCC; height:315px;">
 <?php $news = phpok("zx");?>
<div style=" background:url(tpl/www/images/15.jpg) no-repeat; height:28px; line-height:28px;">
<div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF"><?php echo $news[me][cate_name];?></div>
<div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo list_url($news[me]);?>"><img src="tpl/www/images/16.jpg"></a></div>
<div class="clear"></div></div>
<div style="text-align:center; margin-top:10px;"><img src="<?php echo $news[me][medium_pic];?>" /></div>
<ul style=" margin:15px 10px;">
<?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
<li style="font-size: 12px; background:url(tpl/www/images/14.jpg) 0 center no-repeat; padding-left:10px; line-height:25px; border-bottom:1px dashed #CCC;"><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a></li><?php } ?>
</ul>

<?php unset($news);?>
</div>
</td>

<td style=" background-color: #ffffff; padding-right:36px;" valign="top">
<div style="width:307px; border:1px solid #CCC;height:315px;">
 <?php $news = phpok("xw");?>
<div style=" background:url(tpl/www/images/18.jpg) no-repeat; height:28px; line-height:28px;">
<div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF"><?php echo $news[me][cate_name];?></div>
<div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo list_url($news[me]);?>"><img src="tpl/www/images/19.jpg"></a></div>
<div class="clear"></div></div>
<div style="text-align:center; margin-top:10px;"><img src="<?php echo $news[me][medium_pic];?>" /></div>
<ul style=" margin:15px 10px;">
<?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
<li style="font-size: 12px; background:url(tpl/www/images/14.jpg) 0 center no-repeat; padding-left:10px; line-height:25px; border-bottom:1px dashed #CCC;"><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo sys_cutstring($value[title],30);?></a></li><?php } ?>
</ul>

<?php unset($news);?>
</div>
</td>

<td style="background-color: #ffffff;" valign="top">
<div style="width:307px; border:1px solid #CCC;height:315px;">
<?php $aboutus = phpok_msg("lx");?>
<div style=" background:url(tpl/www/images/21.jpg) no-repeat; height:28px; line-height:28px;">
<div style="float:left; font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-left:15px; color:#FFF""><?php echo $aboutus[title];?></div>
<div style="float:right; margin-right:10px; margin-top:7px;"><a href="<?php echo msg_url($aboutus);?>"><img src="tpl/www/images/22.jpg"></a></div>
<div class="clear"></div><?php if($aboutus[picture]){?>
<div style="text-align:center; margin-top:10px;"><img src="<?php echo $aboutus[picture];?>" width="291" height="89" /></div><?php } ?>
<div style=" margin:15px 10px;">
<div style="    font-size: 13px;line-height:20px;"><?php echo nl2br($aboutus[note]);?></div>
</div>
</div>
<?php unset($aboutus);?>
</div>
</td>
</tr>
</table>

</div>
    <div style="height:100px;width:100%;background-color: #0096db;margin-top: 10px;">

    </div>
<div style="height: 350px;width: 100%;text-align: center">
    <div style="float: left;width: 50%;">
        <div style="height: 200px;width: 50%;margin-top: 80px;margin-left: 30%;text-align: left">
        <p style="font-size: 20px;font-weight: bolder;margin-bottom: 10px;">全国校区</p>
            <p style="padding-left:20px;background-color: #f4f4f4;height: 25px;line-height: 25px;">北京西城区训练中心 010-53368977</p>
            <p style="padding-left:20px;background-color: #47b3e5;height: 25px;color: #fff;line-height: 25px;">北京朝阳区训练中心 010-53368977</p>
            <p style="padding-left:20px;background-color: #f4f4f4;height: 25px;line-height: 25px;">深圳福田区训练中心 0755-23949916</p>
            <p style="padding-left:20px;background-color: #47b3e5;height: 25px;color: #fff;line-height: 25px;">河南汝州训练中心   0375-6780001</p>
            <p style="padding-left:20px;background-color: #f4f4f4;height: 25px;line-height: 25px;">陕西西安训练中心</p>
            <p style="padding-left:20px;background-color: #47b3e5;height: 25px;color: #fff;line-height: 25px;">黑龙江哈尔滨训练中心</p>
        </div>
    </div>
    <div style="float: right;width: 50%">
        <div style="height: 150px;width: 60%;padding:30px 20px;margin-top: 80px;margin-left: 20%;background-color: #f4f4f4;border-radius: 10px;">
            <form method="post" action="index.php?c=post&amp;f=setok&amp;id=&amp;module_id=23" onsubmit="return to_submit();">
            <input type="hidden" id="_to_url" name="_to_url" value="index.php?c=index&amp;">
            <input type="text" name="subject" id="subject" style="padding-left:1%x;height: 30px;width:47%;border-radius: 5px;border: solid #e2e2e2 1px;" placeholder="您的姓名" onblur="if (value ==''){value='请输入您的姓名'}" onfocus="if (value =='请输入您的姓名'){value =''}" value="请输入您的姓名">
            <input type="text" name="lx" id="lx"  style="padding-left:1%;height: 30px;width:47%;border-radius: 5px;border: solid #e2e2e2 1px;" onblur="if (value ==''){value='请输入您的联系电话'}" onfocus="if (value =='请输入您的联系电话'){value =''}" value="请输入您的联系电话" placeholder="您的联系方式">
            <textarea name="content" id="content" cols="" rows="" onblur="if (value ==''){value='您的孩子在学习方面遇到的难题'}" onfocus="if (value =='您的孩子在学习方面遇到的难题'){value =''}" value="您的孩子在学习方面遇到的难题"  style="padding-left:1%;width:97%;height: 60px;border-radius: 5px;margin-top:5px;border: solid #e2e2e2 1px;" placeholder="留下您宝贵的意见"></textarea>
            <button type="submit" id="_phpok_submit" style="cursor:pointer;height: 40px;color:#ffffff;border:solid #ffffff 0px;margin-top:5px;border-radius: 5px;width: 100%;background-color: #ff8c04;">提交信息</button>
            </form>
        </div>
    </div>
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
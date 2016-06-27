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
	<div style="text-align:center;"><img src="<?php echo $rs[ico];?>" /></div>
    <table style="width:1000px; margin:0 auto; margin-left:45px;">
<tr><?php $hotpic = phpok("aa");?><?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
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
<?php } ?><?php unset($hotpic);?>

</tr>
</table>
  <div style="width:891px; margin:0 auto;">
    <ul class="ul_list_g">
      <li style="width:80px; margin-bottom:10px;">课程分类</li>
      <li>6-16岁学生： 国翰全脑开发五步训练法</li>
      <li>成人速记班： 快速记忆法（想记就记） 英语单词速记班   预防老年痴呆脑力训练班</li>
      <li>各大机构： 全国中小学校师资培训  课程合作 技术推广</li>
    </ul>
    <ul class="ul_list_b">
      <li style="width:80px; margin-bottom:10px;">课程介绍</li>
      <li>国翰全脑开发五步训练法 （6-16岁学生）</li>
      <li>我们的训练理念是“学会变会学”“记会变会记”“想记就记”</li>
    </ul>
    <p class="ph_o" style="width:380px;"> 国翰全脑潜能开发五步法 </p>
  </div>
  <div style="text-align:center; margin:20px 0px;"><img src="tpl/www/images/kctx_01.jpg" /></div>
  <div style="width:891px; margin:0 auto;">
    <ul class="ul_list_g">
      <li style="width:80px; margin-bottom:10px;">训练效果</li>
    </ul>
    <p class="list_p"><span>第一步</span>右脑激活初期：基地配予潜能开发脑波音乐（悟进法全程训练达标合格后，学生的右脑回路已经打通，已经学会使用全脑学习，可以不再听）。通过训练，孩子的注意力，记忆力、想象力和学习效率均有一个明显的提高。右脑图像色彩丰富，清晰可见。</p>
    <p class="list_p"> <span>第二步</span>重塑自我激活心智：改变孩子的心灵地图，打破孩子旧的落后的神经网络。大多家长请求改变孩子注意力不集中、记忆力差、缺乏学习兴趣、缺乏自信心等。此训练定为全程训练项目。学生的专注力、记忆力、想象力显著提高。爱因斯坦说过：“想象力比知识更重要”。通过激活脑能训练的学生，想象力极为丰富，作文水平随之提高。在学习思考中易爆发灵感。对世界名画及名胜古迹有欣赏、感悟的能力，提高他的文化素养，人的品质得到根本转变。</p>
    <p class="list_p"> <span>第三步</span>速波动速读学习法：使用七田真的训练技术，用长篇小说来训练。文字以光波的速度传入大脑，在脑中自动转化成图像，学生5分钟左右看完一本长篇小说，并看着脑中的图像把主要内容复述下来，提高左右脑整合能力与口才，练就过目不忘的本领。学生具备这项超能力后2—3遍就可以背一篇课堂所学课文，5分钟就可背20-100个英语单词，听老师讲课时，他的大脑就像看电影一样记住课堂内容，回家写作业时，大脑以电影回放的形式回忆课堂内容，思维敏捷，记忆深刻；解数学难题时，右脑空间思维并发散，极易爆发灵感，老师一点就透；身临其境的想象力和博览群书的文学积累使作文水平大幅提高。 </p>
    <p class="list_p"><span>第四步</span>全脑思维智能学习法：大脑中级水平的智能化训练，即训练右脑对语文、数学、物理、化学等各科知识点进行照相，打通右脑的深层记忆回路。学生上课注意力高度集中，每一节课都主动打开脑智能，老师讲的各科知识点，重点直接以文字的形式输入大脑，存于脑智能中，随时打开复习，文字在脑中照相般清晰。学生回家后，能够左右脑沟通，用左脑对各知识点进行分析，总结，归纳，再保存于右脑的智能图中，用时随意抽取，每个孩子都是学习高手！ </p>
    <p class="list_p"><span>第五步</span>英语思维智能学习法：大脑高级水平的智能化训练，即学生使用右脑对英语课文进行照相，此训练打通了右脑对外语的深层记忆回路。整个训练是培养孩子的内感觉、内视觉、内听觉。训练中学生将英语课文、单词和语音同时输入大脑，文字在脑中像照相一般清晰可见，同时语音在耳边回荡，学生可看着脑中的英语课文和单词背诵、默写，学习英语的兴趣和能力大增，从根本上解决了学英语难的问题。此技能还可用来自学其他外语，文字同样能够输入大脑。</p>
    <p class="ph_g" style="width:100px; margin-bottom:10px;"> 成人速记班 </p>
    <ul class="ul_list_g">
      <li style="width:210px; margin-bottom:10px;">快速记忆法（想记就记）</li>
      <li>训练课时： 10—30课时， 一课时1小时</li>
      <li>收费方式： 1对1 每课时240 元/人，小班 5-8人 每课150元/人</li>
      <li>训练内容： 科技信息时代，知识大爆炸，每天我们需要学习、记忆数以万计各类信息，运用快速记忆法来应对各种数字、词语、文章。1对1班可以针对学员记忆内容进行定制性训练</li>
    </ul>
    <p class="ph_b" style="width:140px; margin-bottom:10px;"> 英语单词速记班 </p>
    <ul class="ul_list_b">
      <li style="width:300px; margin-bottom:10px;">训练课时： 16课时， 一课时1小时</li>
      <li> 收费方式： 1对1  一课时240 ，   小班 5-8人  每课每人150</li>
      <li>训练内容：想象力、单词趣味记忆法、快速记忆法、1阶2阶组合编码。学会快速记忆单词的能力。熟记300-1000英语单词。我们的训练理念是“学会变会学”“记会变会记”想记就记”</li>
    </ul>
    <p class="ph_o" style="width:220px; margin-bottom:10px;"> 预防老年痴呆脑力训练班 </p>
    <p class="list_p">随着我国人口老龄化的到来，老年痴呆症对我们工作和生活的影响越来越大，所以怎样预防和治疗老年痴呆变得越来越重要，其实老年性痴呆的预防要从中年开始做起，因为老年性痴呆能在痴呆期或痴呆初期被发现，并在生活上采取相应措施，持之以恒地做下去，是完全可以控制其发展的，并且可以使其在一定程度上向好的方向转化。</p>
    <ul class="ul_list_o">
      <li>收费方式： 1对1  每课时240元/人 ，   小班 5-8人  每课每人150元/人</li>
      <li> 训练课时： 16课时</li>
      <li>训练内容： 脑力训练包括（各类记忆法）、高层智慧冥想训练、放松减压缓解失眠</li>
    </ul>
  </div>
  <div style="text-align:center; margin-top:20px;"><img src="tpl/www/images/kctx_02.jpg" /></div>

</div>
<?php $APP->tpl->p("foot","","0");?>
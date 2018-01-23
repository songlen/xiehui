<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content', 'header'); ?>

<div class="container">
	<div class="index_news_title">新闻动态</div>
	<div class="index_video_news">
		<div class="index_video"><img src="<?php echo APP_PATH;?>statics/default/images/index_12.jpg" alt=""></div>
		<div class="index_news">
			<ul>
				<li><a href="">中国游乐协会公司<span>[2018-12-12]</span></a></li>
				<li><a href="">是凶多吉少了肯定就是得了看电视剧<span>[2018-12-12]</span></a></li>
				<li><a href="">是凶多吉少了肯定就是得了看电视剧<span>[2018-12-12]</span></a></li>
				<li><a href="">是凶多吉少了肯定就是得了看电视剧<span>[2018-12-12]</span></a></li>
				<li><a href="">是凶多吉少了肯定就是得了看电视剧<span>[2018-12-12]</span></a></li>
			</ul>
		</div>
	</div>
	<div class="index_more_news"><a href="">更多新闻</a></div>
</div>
<div class="index_app">
	<div class="container">
		<div class="index_app_title">APP同步信息</div>
		<ul>
			<li><a href=""><img src="<?php echo APP_PATH;?>statics/default/images/index_16.jpg" alt=""><p>企业</p></a></li>
			<li><a href=""><img src="<?php echo APP_PATH;?>statics/default/images/index_18.jpg" alt=""><p>项目</p></a></li>
			<li><a href=""><img src="<?php echo APP_PATH;?>statics/default/images/index_20.jpg" alt=""><p>产品</p></a></li>
			<li><a href=""><img src="<?php echo APP_PATH;?>statics/default/images/index_22.jpg" alt=""><p>招聘</p></a></li>
			<li><a href=""><img src="<?php echo APP_PATH;?>statics/default/images/index_25.jpg" alt=""><p>论坛</p></a></li>
		</ul>
	</div>
</div>

<div class="index_exhibition">
	<div class="container">
		<div class="index_exhibition_title">历年展会图集</div>
		<ul>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="index_forum">
	<div class="container">
		<div class="index_forum_title">历年论坛图集</div>
		<ul>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_35.jpg" width="390" height="220" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_35.jpg" width="390" height="220" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_35.jpg" width="390" height="220" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="index_exhibition">
	<div class="container">
		<div class="index_exhibition_title">历年摩天奖</div>
		<ul>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php echo APP_PATH;?>statics/default/images/index_32.jpg" width="290" height="358" alt="">
					<p class="tit">北京国家会议中心</p>
					<p class="zhuban">中国游乐园协会主办</p>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- banner -->
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/default/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.flexslider').flexslider({
			directionNav: true,
			pauseOnAction: false,
			slideshowSpeed: 3000
		});
	});
</script>
<?php include template('content', 'footer'); ?>
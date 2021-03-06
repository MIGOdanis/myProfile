<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . "/css/pages/index.css");
$cs->registerScriptFile($baseUrl . "/js/pages/index.js");
$this->pageTitle = "ZINYI - WEB DEVELOPER";
?>
<div id="main-box">
	<div id="navi" class="f-left">
		<img src="<?php echo $baseUrl; ?>/images/pages/ab-but.png">
		<img src="<?php echo $baseUrl; ?>/images/pages/works-but.png">
	</div>
	<div id="navi-title" class="f-left">
		<div class="straight-text">關於我</div>
		<div class="straight-text">作品展示</div>
	</div>
	<div>
		
	</div>
	<div id="index-list" class="f-left">
		<div id="start">
			<div id="hello-box">
				<div class="big-title">HI! 我是王仁邑</div>
				<div class="m-con">很高興認識你，希望有機會為您服務! :-) </div>
			</div>
			<div class="text-box">
				<div id="about-me">
					<div class="big-text60 function-AboutMe">function AboutMe( ) {</div>
						<div>
							<ul class="my-data">
								<div class="m-title"><b>工作經驗</b></div>
								<li>崇右技術學院-助理工程師 1年(校內維修與系統維護作業) </li>
								<li>訊利有限公司-程式設計師 2年(網站開發與維護) </li>
							</ul>
							<ul class="my-data">
								<div class="m-title"><b>主要技能</b></div>
								<li>Linux + Apache + MySQL + PHP(LAMP)開發作業，熟悉PHP相關設計</li>
								<li>jQuery 、 jQueryUI 、 JavaScript相關設計與應用</li>
								<li>熟悉AJAX開發</li>
								<li>MVC架構之開發與維護，熟悉Yii PHP Framework</li>
								<li>熟悉版本控管 Git Hub 之使用</li>
								<li>略懂AWS雲端開發並熟悉SES之應用</li>
								<li>Google 、 Facebook等社群API之開發應用</li>
								<li>企業網路環境架設與管理</li>
							</ul>
						</div>
					<div class="big-text60 function-AboutMe">}</div>
				</div>
			</div>
		</div>
		<div id="works">
			<div class="works-box">
				<img src="<?php echo $baseUrl; ?>/images/pages/works/ezb.png">
				<div class="works-title">EZ BACK UP</div>
				<div>EZ BACK UP是一套簡易的Linux Shell Scripts，提供簡單的排程(cron)異地備份</div>
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
			<div class="works-box">
				
			</div>
		</div>
	</div>
</div>
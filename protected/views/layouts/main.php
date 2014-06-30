<?
$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerScript('helpers', '
    baseUrl = '.CJSON::encode(Yii::app()->baseUrl).';
', CClientScript::POS_HEAD);
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6" lang="zh"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie10 lt-ie9 lt-ie8 ie7" lang="zh"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie10 lt-ie9 ie8" lang="zh"> <![endif]-->
<!--[if IE 9]> <html class="lt-ie10 ie9" lang="zh"> <![endif]-->
<!--[if gt IE 9]> <html class="gt-ie9" lang="zh"> <![endif]-->
<!--[if !IE]><!--> <html class="modern" lang="zh"> <!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"> 
	<meta charset="utf-8">
	<title>ZINYI - WEB DEVELOPER</title>
	<meta name="viewport" content="width=device-width, user-scalable=0, maximum-scale=1.0, initial-scale=1.0">
	<meta name="keywords" content="<?php echo $keyword; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="robots" content="<?php echo $robots; ?>">
	<!-- Open Graph Protocol -->
	<meta property="fb:app_id" content="<?php echo Yii::app()->params['fb_appId']; ?>"/>
	<meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://<? echo str_replace("kurumap.com.tw","kurumap.com",$_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']; ?>"/>
	<meta property="og:image" content="<?php echo $image; ?>"/>
	<meta property="og:site_name" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
	<meta property="og:description" content="<?php echo $description; ?>"/>
	
</head>

<body>
	<?php echo $content; ?>
</body>
</html>
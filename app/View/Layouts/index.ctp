<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
		<title>Astanatech</title>
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
	</head>
	<body>
		<?php echo $this->element('header'); ?>
		<main class="cr" role="main">			
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<?php echo $this->fetch('content'); ?>        
		</main>
		<?php echo $this->element('footer'); ?>
		<script type="text/javascript" src="/js/TweenLite.min.js"></script>
		<script type="text/javascript" src="/js/EasePack.min.js"></script>
		<script type="text/javascript" src="/js/rAF.js"></script>  
		<script type="text/javascript" src="/js/slick.min.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</body>
</html>
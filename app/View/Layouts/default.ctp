<?php

$cakeDescription = __d('cake_dev', 'Sítio das abelhas');
$cakeVersion = __d('cake_dev', 'Sítio das abelhas - 2014')
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container" class="container-fluid">

		<div id="header" class="row">
			<div class="col-md-4">
				<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>
			<div class="col-md-6">
				<ul class="nav nav-pills nav-justified" role="tablist">
				  <li role="presentation" class="active"><a href="#">Home</a></li>
				  <li role="presentation"><a href="#">Profile</a></li>
				  <li role="presentation"><a href="#">Messages</a></li>
				  <li role="presentation"><a href="#">Messages</a></li>
				  <li role="presentation"><a href="#">Messages</a></li>
				</ul>
			</div>
		</div>

		<div id="content" class="row">
			<?php echo $this->Session->flash(); ?>
			<div class="col-md-12">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<div id="footer" class="row">
			<div class="col-md-offset-4 col-md-4">
				<p>
					<?php echo $cakeVersion; ?>
				</p>
			</div>
		</div>

	</div>
</body>
</html>

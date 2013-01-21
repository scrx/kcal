<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>

<html>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<head>
	<?php echo $this->html->charset();?>
	<title>Kcal Application > <?php echo $this->title(); ?></title>
	
	<?php echo $this->html->style(array('debug', 'lithium','kcal_style','dateinput','bootstrap')); ?>
	
	<?php echo $this->html->script('jquery-1.7.2.js'); ?>
	<?php echo $this->html->script('jquery.tools.min.js'); ?>
	
	
	<?php //echo $this->scripts(); ?>
	<?php //echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
	<!--<script src="js/jquery-1.6.2.min.js"></script> -->
</head>
<body class="app">
	<div id="top_header">
		<div id="menu">
			<ul class="nav nav-pills">
				<li class="disabled"> <?=$this->html->link('Meals', 'Serving::index')?>	</li>
				<li class="disabled"> <?=$this->html->link('Add Meal', 'Serving::add')?></li>
				<li class="disabled"> <?=$this->html->link('Users', 'User::index')?></li>
				<li class="disabled"> <?=$this->html->link('Add User', 'User::add')?></li>
			</ul>
		</div>
	</div>
	<div id="container">
		<div id="header">

		</div>
		
		<div id="content">
			<?php echo $this->content(); ?>
		</div>
		
	</div>
</body>
</html>
<script>
	//alert('bla');
	//test = $('div').attr('id');
	//alert(test);
</script>
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
	
	<?php echo $this->html->style(array('debug', 'lithium','kcal_style','dateinput')); ?>
	
	<?php echo $this->html->script('jquery-1.7.2.js'); ?>
	<?php echo $this->html->script('jquery.tools.min.js'); ?>
	
	
	<?php //echo $this->scripts(); ?>
	<?php //echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
	<!--<script src="js/jquery-1.6.2.min.js"></script> -->
</head>
<body class="app">
	<div id="container">
		<div id="header">
								
			<!--	<?=$this->html->link('Dodaj Żarło', 'Meal::add')?> 
			<!--	<?= $this->html->link('Wywal całe Żarło', 'Meal::removeAll')?> -->										
			<nav>
		        <ul>
		                <li> <?=$this->html->link('Meals', 'Meal::index')?> </li>
		                <li> <?=$this->html->link('Add Meal', 'Meal::add')?> </li>
		                <li> <?=$this->html->link('Index user', 'User::index')?> </li>
		                <li> <?=$this->html->link('Dev', 'Dev::index')?> </li>
		                <li> <?=$this->html->link('Serving', 'Serving::index')?> </li>
		                
		                <li><a href="">Contact</a></li>
		        </ul>
</nav>

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
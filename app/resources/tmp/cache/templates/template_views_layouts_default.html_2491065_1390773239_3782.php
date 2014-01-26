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
	 
    



	<?php //echo $this->view()->render(array('element' => 'flash'), array('datavar' => 0)) ?>
	<?php echo $this->html->style(array('debug', 'lithium','kcal_style','dateinput','bootstrap','select2','select2-bootstrap')); ?>

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
	<?php echo $this->html->script('jquery-1.7.2.js'); ?>
	<?php echo $this->html->script('jquery.tools.min.js'); ?>
	<?php echo $this->html->script('bootstrap.js'); ?>
	<?php echo $this->html->script('select2.min.js'); ?>
	
	
	<?php //echo $this->scripts(); ?>
	<?php //echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
	<!--<script src="js/jquery-1.6.2.min.js"></script> -->
</head>



<body class="app" style='padding-top:40px'>
		<!--<ul class="breadcrumb">
		  <li><a href="#">Home</a> <span class="divider">/</span></li>
		  <li><a href="#">Library</a> <span class="divider">/</span></li>
		  <li class="active">Data</li>
		</ul> -->

	<div id="container">

		<div id="header">
			<div class="navbar navbar-inverse navbar-fixed-top">
			  <div class="navbar-inner ">
			    <?php echo $this->html->link('Kcal App','User::profile',array('class'=>'brand')); ?>
			    <ul class="nav">
	
			       <li><?php echo $this->html->link('Profile', 'User::profile'); ?></li>
			      <li><?php echo $this->html->link('User History', 'UserHistoryData::index'); ?></li>
			  	  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Food <b class="caret"></b></a>                                           
						<ul class="dropdown-menu">
							<li> <?php echo $this->html->link('List', 'Food::index'); ?></li>
							<li> <?php echo $this->html->link('Add', 'Food::add'); ?></li>
						</ul>
			      </li>   	
			  	  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Serving <b class="caret"></b></a>                                           
						<ul class="dropdown-menu">
							<li> <?php echo $this->html->link('List', 'Serving::index'); ?></li>
							<li> <?php echo $this->html->link('Add', 'Serving::add'); ?></li>
						</ul>
			      </li>  			      		       
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>                                           
						<ul class="dropdown-menu">
							<li> <?php echo $this->html->link('Users',    'User::index'); ?></li>
							<li> <?php echo $this->html->link('Add User', 'User::add'); ?></li>
							<li> <?php echo $this->html->link('Login',    'User::login'); ?></li>						 
							<li class="divider"></li>
							<li><?php echo $this->html->link('Logout', 'User::logout'); ?></li>
						</ul>
			      </li>
			      </ul>
			      <ul class='nav pull-right'>
					<li>   <?php echo $this->html->link("Zalogowany jako: ".$this->login->fullName(), 'User::profile'); ?> </li>
					</ul>
			    
			
			
			
			  </div>
			</div>
		</div>

		<div id="content">
			<?php echo $this->flashMessage->show(); ?>
			
			<?php echo $this->content(); ?>
		</div>
		
	</div>
</body>
</html>
<script>
	//alert('bla');
	//test = $('div').attr('id');
	//alert(test);

    //$(document).ready(function() { $(".enable_select").select2({width:'100%', minimumInputLength: 2}); });

</script>
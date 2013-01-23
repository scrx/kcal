<?php echo $this->form->create(null); ?>
	<?php echo $this->form->field('username', array('label'=>'Username')); ?>
	<?php echo $this->form->field('password', array('type' => 'password', 'label'=>'Password')); ?>
	<?php echo $this->form->submit('Login'); ?>
<?php echo $this->form->end(); ?>